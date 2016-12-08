<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Dishes;

class DishesController extends Controller
{
    public function index()
    {
 
     	return view("dishes.index");
	    // return  ("Change dishes page - under construction");
	    // 	$allCategories = Dishes::all();
	    // 	$allSetMenus = SetMenus::all();

	    //     return view("categories.index", compact("allDishes", "allSetMenus"));
    }
}
