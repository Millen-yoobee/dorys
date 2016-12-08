<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Categories;

class CategoriesController extends Controller
{
    public function index()
    {
    	// return view("categories.index"); 
    	$allCategories = Categories::all();
	    return view("categories.index", compact("allCategories"));
    }

}
