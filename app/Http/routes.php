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

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');



//shopper
Route::get('shopper', 'ShopperController@index'); //to list the retailers
Route::get('shopper/order', 'ShopperController@order_proposed'); //to list the retailers
Route::get('shopper/order-info', 'ShopperController@order_info'); //to list the retailers

//retailers
Route::get('retailers', 'HomeController@retailers_list'); //to list the retailers
Route::get('retailers/show-new', 'HomeController@retailers_view'); //For both show and new

//categories
Route::get('categories', 'HomeController@categories_list'); //to list categories and filter by type
Route::get('categories/show-new', 'HomeController@categories_view'); //to list categories and filter by type


//products
Route::get('products', 'HomeController@products_list'); //to list categories and filter by type
Route::get('products/show-new', 'HomeController@products_view'); //to list categories and filter by type


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
