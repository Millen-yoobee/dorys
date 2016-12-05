<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ReserveController extends Controller
{
    public function index()
    {
        return view('reserve.index');
    }
}
