<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Terms;

class EditTermsController extends Controller
{

    public function index()
    {
    
    }

    public function show()
    {
    
	    // return  ("Edit Terms page - under construction");
        $id = 1;

        $term = Terms::findOrFail($id); 
        return view("editterms.show", compact("term"));
    }

        public function edit2()
    {
        $id = 1;
        $term = Terms::findOrFail($id);
        return view("editterms.editterms2", compact("term"));


    }
        public function edit4()
    {
        $id = 1;
        $term = Terms::findOrFail($id);
        return view("editterms.editterms4", compact("term"));
    }

    public function update2(Request $request)
    {
        $id = 1;
        $term = Terms::findOrFail($id);
        
        $term->two = $request->textarea;
        $term->tc_by = "to be added";
        $term->updated_at = new\Carbon\Carbon;
        
        $term->save();
        // Session::flash("success", "The About Us section was updated successfully.");
        return redirect("/termsconds");
    }

    public function update4(Request $request)
    {
        $id = 1;
        $term = Terms::findOrFail($id);
        
        $term->four = $request->textarea;
        $term->tc_by = "to be added";
        $term->updated_at = new\Carbon\Carbon;
        
        $term->save();
        // Session::flash("success", "The About Us section was updated successfully.");
        return redirect("/termsconds");
    }


}
