<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Dishes;

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
	    $allDishes = Dishes::all();
    	return view("dishes.add", compact("allDishes"));
    }

    public function create(Request $request)
    {
    	$this->validate ($request, [
    		"name"=>"required|max:10|unique:categories",
    	]);

        $dish = new Dishes();

        $dish->name = $request->name;

        &dish->price = $request->price;

        $dish->add_upd_by = \Auth::user()->username;

    	$dish->created_at = new\Carbon\Carbon;

    	$dish->save();
    	// Session::flash("success", "The About Us section was updated successfully.");
        return redirect("/dishes");
        
    }

    public function edit()
    {
    	return ("edit dish");
    	// return view("dishes.add");
    }

    public function delete()
    {
    	return ("delete dish");
    	// return view("dishes.add");
    }



}
