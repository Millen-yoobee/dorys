<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function index()
    {
    	return view("pages.landing");
    }

    public function terms()
        {
        	return view("pages.terms");
        }
 
    public function about()
        {

        	return view("pages.about")->with([
        		'first' => 'Dory\'s',
        		'last' => 'Restaurant'

        		]);

        }  

    public function location()
        {
        	return "Our location";
        }

    public function listing()
    {
        $items = [
            ["Beef brisket", "300.00"],
            ["Beef with broccoli flower", "450.00"],
            ["Beef with young corn and mushroom", "400.00"],
            ["Braised chicken and mushroom", "450.00"],
            ["Buttered Chicken", "400.00"],
            ["Chicken and nuts with mushroom", "440.00"],
            ["Chicken curry", "325.00"],
            ["Chicken liver and gizzard", "375.00"],
            ["Chicekn rebosado", "325.00"],
            ["Chicken with black bean sauce", "315.00"],
            ["Chicken with broccoli", "375.00"],
            ["Chicken with cauliflower", "385.00"],
            ["Chicken with celery", "390.00"]
        ];

        $sets = [
            ["S3150", "3150.00"],
            ["S4150", "4150.00"]

        ];
        
        return view("pages.listing", compact("items", "sets"));

    }


} // closing tag of PagesController
