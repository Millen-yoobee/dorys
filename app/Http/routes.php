<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get("/", "HomeController@index");

Route::get("Location", "HomeController@location");
Route::get("location", "HomeController@location");

Route::get("Terms", "HomeController@terms");
Route::get("terms", "HomeController@terms");

Route::get("About", "HomeController@about");
Route::get("about", "HomeController@about");

Route::get("Gallery", "HomeController@gallery");
Route::get("gallery", "HomeController@gallery");

Route::get("Listing", "ListingController@index");
Route::get("listing", "ListingController@index");

Route::get("View", "ViewController@index");
// Route::get("menus", "MenusController@index");

Route::post("Checkout", "CheckoutController@index");

Route::get("Reserve", "HomeController@reserve");
Route::get("reserve", "HomeController@reserve");

Route::get("Admin", "AdminController@index")->middleware("auth");
Route::get("admin", "AdminController@index")->middleware("auth");

// Route::get("Password", "PasswordController@index")->middleware("auth");

Route::get("categories", "CategoriesController@index")->middleware("auth");

Route::get("dishes", "DishesController@index")->middleware("auth");

Route::get("setmenus", "SetmenusController@index")->middleware("auth");


Route::get("editterms", "EditTermsController@index")->middleware("auth");

Route::get("aboutus", "EditaboutController@show")->middleware("auth");
Route::get("editabout", "EditaboutController@edit")->middleware("auth");
Route::post("updateabout", "EditaboutController@update")->middleware("auth");


Route::get("logout", "HomeController@index")->middleware("auth");



Route::get("Auth", ['as' => 'auth.register', 'uses' => 'Auth\AuthController@showRegistrationForm']);

Route::auth();

Route::get('/home', 'HomeController@index');
