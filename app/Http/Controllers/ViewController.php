<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dishes;

class ViewController extends Controller
{
    public function index()
    {
      
        $allDishes = Dishes::all();
        

        //return $allItems;


        //$AllItems = Items->select("item_category", "item_name", "item_price")->get();
        
        // $AllItems = \DB::table("items")->get;

        // return view("menus.index", compact("AllItems"));
        return view("view.index", compact('allDishes'));
	}
}
