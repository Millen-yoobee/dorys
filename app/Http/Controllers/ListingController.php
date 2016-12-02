<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dishes;
use App\SetMenus;

class ListingController extends Controller
{
    public function index()
    {

    	$allDishes = Dishes::all();
    	$allSetMenus = SetMenus::all();

        return view("listing.index", compact("allDishes", "allSetMenus"));
    }
}
