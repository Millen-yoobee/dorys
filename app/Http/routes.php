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

Route::get("about", "HomeController@about");

Route::get("Gallery", "HomeController@gallery");
Route::get("gallery", "HomeController@gallery");

Route::get("listing", "ListingController@index");

Route::post("cart/{id}", "OrderController@index");

Route::get("checkout", "CheckoutController@index");
Route::post("checkout/{id}", "CheckoutController@update");
Route::get("pay", "CheckoutController@pay");
Route::get("text", "CheckoutController@text");
Route::get("email", "CheckoutController@email");


Route::get("view", "ViewController@index");
// Route::get("menus", "MenusController@index");

Route::get("Reserve", "HomeController@reserve");
Route::get("reserve", "HomeController@reserve");

Route::get("Admin", "AdminController@index")->middleware("auth");
Route::get("admin", "AdminController@index")->middleware("auth");

// Route::get("Password", "PasswordController@index")->middleware("auth");

Route::get("categories", "CategoriesController@index")->middleware("auth");
Route::get("addcategory", "CategoriesController@add")->middleware("auth");
Route::post("create-category", "CategoriesController@create")->middleware("auth");
Route::get("/editcategory/{id}", "CategoriesController@edit")->middleware("auth");
Route::post("/updatecategory/{id}", "CategoriesController@update")->middleware("auth");
Route::get("/deletecategory/{id}", "CategoriesController@delete")->middleware("auth");
Route::post("/removecategory/{id}", "CategoriesController@remove")->middleware("auth");

Route::get("dishes", "DishesController@index")->middleware("auth");
Route::get("/add-dish", "DishesController@add")->middleware("auth");
Route::post("/create-dish", "DishesController@create")->middleware("auth");


Route::get("edit-dish/{id}", "DishesController@edit")->middleware("auth");
Route::post("update-dish/{id}", "DishesController@update")->middleware("auth");


Route::get("delete-dish/{id}", "DishesController@delete")->middleware("auth");
Route::post("remove-dish/{id}", "DishesController@remove")->middleware("auth");


Route::get("setmenus", "SetmenusController@index")->middleware("auth");


Route::get("termsconds", "EditTermsController@show")->middleware("auth");
Route::get("editterms2", "EditTermsController@edit2")->middleware("auth");
Route::get("editterms4", "EditTermsController@edit4")->middleware("auth");
Route::post("updateterms2", "EditTermsController@update2")->middleware("auth");
Route::post("updateterms4", "EditTermsController@update4")->middleware("auth");


Route::get("aboutus", "EditaboutController@show")->middleware("auth");
Route::get("editabout", "EditaboutController@edit")->middleware("auth");
Route::post("updateabout", "EditaboutController@update")->middleware("auth");



// Route::get("logout", "HomeController@index")->middleware("auth");  NOT NEEDED


Route::get("Auth", ['as' => 'auth.register', 'uses' => 'Auth\AuthController@showRegistrationForm']);

Route::auth();

Route::get('/home', 'HomeController@index');
