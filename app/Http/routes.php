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

Route::get("Terms", "TermsController@index");
Route::get("terms", "TermsController@index");

Route::get("About", "AboutController@index");
Route::get("about", "AboutController@index");

Route::get("Location", "LocationController@index");
Route::get("location", "LocationController@index");

Route::get("Listing", "ListingController@index");
Route::get("listing", "ListingController@index");

Route::get("View", "ViewController@index");
Route::get("view", "ViewController@index");
// Route::get("menus", "MenusController@index");

Route::post("Checkout", "CheckoutController@index");

Route::get("Reserve", "ReserveController@index");
Route::get("reserve", "ReserveController@index");

Route::post("Gallery", "GalleryController@index");

Route::get("Login", "LoginController@index");

Route::get("Admin", "AdminController@index")->middleware("auth");
Route::get("Password", "PasswordController@index")->middleware("auth");

Route::get("AddCat", "AddCatController@index")->middleware("auth");
Route::get("DeleteCat", "DeleteCatController@index")->middleware("auth");

Route::get("AddItem", "AddItemController@index")->middleware("auth");
Route::get("EditItem", "EditItemController@index")->middleware("auth");
Route::get("DeleteItem", "DeleteItemController@index")->middleware("auth");

Route::get("AddSet", "AddSetController@index")->middleware("auth");
Route::get("EditSet", "EditSetController@index")->middleware("auth");
Route::get("DeleteSet", "DeleteSetController@index")->middleware("auth");

Route::get("EditTermsConditions", "EditTermsConditionsController@index")->middleware("auth");
Route::post("EditAboutUs", "EditAboutUsController@index")->middleware("auth");



Route::auth();

Route::get('/home', 'HomeController@index');
