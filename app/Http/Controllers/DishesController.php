<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Intervention\Image\ImageManager;
use App\Dishes;
use App\Categories;

use Session;

class DishesController extends Controller
{
    public function index()
    {
 
     // 	return view("dishes.index");
	    // // return  ("Change dishes page - under construction");
	    $allDishes = Dishes::all();

	    return view("dishes.index", compact("allDishes"));
    }

    public function add()
    {
        // Use the Category model
        // Pull the categories from the Categorys table
        $allCategories = Categories::all();
        // compact it into the view
        // where you select the category, change to select with the options
        // being the categories which you compacted in
	    return view("dishes.add", compact("allCategories"));
    }

    public function create(Request $request)
    {
    	$this->validate ($request, [
    		"name"=>"required|min:1|max:50|unique:dishes",
            "category"=>"required",  // must be in categories table
            "price" => "required|numeric",
            "image" => "image",
    	]);

        $newDish = new Dishes();

        $newDish->name = $request->name;
        $newDish->category = $request->category;
        $newDish->price = $request->price;

        $manager = new ImageManager();
        $folder = "./images/Dishes";
        $imagename = preg_replace("/[^0-9a-zA-Z]/", "", $request->name);

        $dishImage = $manager->make($request->image);
        $dishImage->fit(500, null, function($constraint) {
            $constraint->upsize();   });
        $dishImage->save($folder."/".$imagename.".jpg", 100);

        $newDish->image = $imagename.".jpg";


        $newDish->add_upd_by = \Auth::user()->username;
    	$newDish->created_at = new\Carbon\Carbon;

    	$newDish->save();
    	
        Session::flash("success", "The new dish was added successfully.");
        // return view("/dishes.add");

        return redirect("/dishes");
        
    }

    public function edit(Request $request, $id)
    {
        $dish = Dishes::findOrFail($id);
        $allCategories = Categories::all();

        return view("dishes.edit", compact("dish", "allCategories"));

    }

        public function update(Request $request, $id)
    {
        if( $request->hasFile('image') ) {
            die('Upload and update image');

             $dish->image = $newFileName;
        }

        $dish = Dishes::findOrFail($id);

        if ($dish->name !== $request->name)
            {
                $this->validate ($request, [
                    "name"=>"required|max:50|unique:dishes",
                    "category"=>"required",  // must be in categories table
                    "price" => "required|numeric",
                    "image" => "image",
                ]);
            }
        else
            {
                $this->validate ($request, [
                    "category"=>"required",  // must be in categories table
                    "price" => "required|numeric",
                    "image" => "image",
                ]);
            }


        $dish->name = $request->name;
        $dish->category = $request->category;
        $dish->add_upd_by = \Auth::user()->username;
        $dish->updated_at = new\Carbon\Carbon;

        $dish->save();
        // Session::flash("success", "The About Us section was updated successfully.");
        return redirect("/dishes");
        
    }


    public function delete(Request $request, $id)
    {
        $dish = Dishes::findOrFail($id);
    	return view("dishes.delete", compact("dish"));
    }

    public function remove(Request $request, $id)
    {
        $dish = Dishes::findOrFail($id);
        $dishImage = $dish["image"];
        unlink("./images/Dishes/$dishImage");
        $dish->delete();
        // Session::flash("success", "The About Us section was updated successfully.");
        return redirect("/dishes");

    }

}
