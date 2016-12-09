<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Abouts;

class EditaboutController extends Controller
{
    public function index()
    {
    
	    $allAbout = Abouts::all();
	    // 	$allSetMenus = SetMenus::all();

	    return view("aboutediting.index", compact("allAbout"));


    }

    public function show()
    {
        $id = 1;
        $about = Abouts::findOrFail($id);
        return view("aboutediting.show", compact("about"));


    }

    public function edit()
    {
        $id = 1;
        $about = Abouts::findOrFail($id);
        return view("aboutediting.edit", compact("about"));


    }
    public function submit(Request $request)
    {
        $newAbout = new Abouts();
        $newAbout->textarea = $request->textarea;
        $newAbout->about_by = "to be added";
        $newAbout->updated_at = new\Carbon\Carbon;
        $newAbout->save();
        return redirect("/EditaboutController@index");
    }

    public function update(Request $request)
    {
    	// $newAbout = new About();

    	// $terabout
    	// tc_by
    	// updated_at
	    // $allTerms = Terms::all();
	    // // 	$allSetMenus = SetMenus::all();

	    // return view("aboutediting.index", compact("allTerms"));

	    
    }
}
