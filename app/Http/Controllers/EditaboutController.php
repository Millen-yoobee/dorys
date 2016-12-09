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

	    return view("editabout.index", compact("allAbout"));


    }

    public function show()
    {
        $id = 1;
        $about = Abouts::findOrFail($id);
        return view("editabout.show", compact("about"));


    }

    public function edit()
    {
        $id = 1;
        $about = Abouts::findOrFail($id);
        return view("editabout.edit", compact("about"));


    }
    public function submit(Request $request)
    {
        $newAbout = new Abouts();
        $newAbout->textarea = $request->textarea;
        $newAbout->about_by = "to be added";
        $newAbout->updated_at = new\Carbon\Carbon;
        $newAbout->save();
        return redirect("/EditaboutController@show");
    }

    public function update(Request $request)
    {
        $id = 1;
        $about = Abouts::findOrFail($id);
        $about->textarea = $request->textarea;
        $about->about_by = "to be added";
        $about->updated_at = new\Carbon\Carbon;
        
        $about->save();
	    // Session::flash("success", "The About Us section was updated successfully.");
        return redirect("/EditaboutController@show");
    }

    
}
