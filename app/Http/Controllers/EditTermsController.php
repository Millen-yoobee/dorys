<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Terms;

class EditTermsController extends Controller
{

    public function index()
    {
    
	    return  ("Edit Terms page - under construction");
	    // 	$allCategories = Dishes::all();
	    // 	$allSetMenus = SetMenus::all();

	    //     return view("categories.index", compact("allDishes", "allSetMenus"));
    }

    public function show()
    {
    
	    // return  ("Edit Terms page - under construction");
        $id = 1;
        $term = Terms::findOrFail($id);

        $allTwos = Terms::where("duration", 2) 
        	-> orderBy("name")
        	-> get();
        $allFours = Terms::where("duration", 4)
        	-> orderBy("name")
        	-> get();
        return view("editterms.show", compact("term", "allTwos", "allFours"));
    }
}
