<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TermsController extends Controller
{
    public function index()
    {
        return view('terms.index');
    }
}
