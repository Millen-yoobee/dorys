<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

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
        return view('home.terms');
    }

    public function about()
    {
        return view('home.about');
    }

    public function gallery()
    {
        return view("home.gallery");
    }

}
