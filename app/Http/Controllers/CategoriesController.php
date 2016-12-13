<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Categories;

class CategoriesController extends Controller
{
    public function index()
    {
    	$allCategories = Categories::all();
	    return view("categories.index", compact("allCategories"));
    }

    public function add()
    {
    	return view("categories.add");
    }

    public function create(Request $request)
    {
    	$this->validate ($request, [
    		"name"=>"required|max:10|unique:categories",
    	]);

        $category = new Categories();

        $category->name = $request->name;


        $category->by_id = \Auth::user()->username;

    	$category->created_at = new\Carbon\Carbon;

    	$category->save();
    	// Session::flash("success", "The About Us section was updated successfully.");
        return redirect("/categories");
        
    }

    public function edit(Request $request, $id)
    {
        $category = Categories::findOrFail($id);
        return view("categories.edit", compact("category"));
        
    }

    public function update(Request $request, $id)
    {
        $category = Categories::findOrFail($id);

        $this->validate ($request, [
            "name"=>"required|max:10|unique:categories",
        ]);

        
        
        $category->name = $request->name;

        $category->by_id = \Auth::user()->username;
        $category->updated_at = new\Carbon\Carbon;

        $category->save();
        // Session::flash("success", "The About Us section was updated successfully.");
        return redirect("/categories.edit", compact("id"));
        
    }

    public function delete(Request $request, $id)
    {
        $category = Categories::findOrFail($id);
        return view("categories.delete", compact("category"));        
    }

    public function remove(Request $request, $id)
    {
        $category = Categories::findOrFail($id);

    	$category->delete();
    	// Session::flash("success", "The About Us section was updated successfully.");
        return redirect("/categories");
        
    }

}
