<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Terms;
use App\Abouts;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.index');
    }

    public function reserve()
    {
        return view('home.reserve');
    }

    public function location()
    {
        return view('home.location');
    }

    public function terms()
    {

        $id = 1;
        $term = Terms::findOrFail($id); 
        return view('home.terms', compact("term"));
    }

    public function about()
    {
        $id = 1;
        $about = Abouts::findOrFail($id);
        return view("home.about", compact("about"));
    }

    public function gallery()
    {
        return view("home.gallery");
    }

}
