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

Route::get('/', 'HomeController@all');


//FRONT

Route::get('front', 'FrontController@index'); //to list the retailers
Route::get('front/orders/summary', 'FrontController@orders_summary'); //to list the retailers
Route::get('front/orders/receipt', 'FrontController@orders_receipt'); //to list the retailers

//FRONT IOS

Route::get('front-ios', 'FrontIosController@index'); //to list the retailers
Route::get('front-ios/orders/summary', 'FrontIosController@orders_summary'); //to list the retailers
Route::get('front-ios/orders/summary/retailer', 'FrontIosController@orders_summary_retailer'); //to list the retailers
Route::get('front-ios/time-picker', 'FrontIosController@time_picker'); //to list the retailers



//shopper
Route::get('shopper', 'ShopperController@index'); //to list the retailers
Route::get('shopper/order', 'ShopperController@order_proposed'); //to list the retailers
Route::get('shopper/order-info', 'ShopperController@order_info'); //to list the retailers


Route::get('shopper/retailer-1', 'ShopperController@retailer_1'); //to list the retailers
Route::get('shopper/retailer-2', 'ShopperController@retailer_2'); //to list the retailers
Route::get('shopper/retailer-2-revision', 'ShopperController@retailer_2_revision'); //to list the retailers
Route::get('shopper/retailer-2-revision-factura', 'ShopperController@retailer_2_revision_factura'); //to list the retailers
Route::get('shopper/retailer-2-revision-end', 'ShopperController@retailer_2_revision_end'); //to list the retailers
Route::get('shopper/product', 'ShopperController@product'); //to list the retailers
Route::get('shopper/replacement', 'ShopperController@replacement'); //to list the retailers


//ADMIN
Route::get('admin', 'HomeController@index');
//retailers
Route::get('retailers', 'HomeController@retailers_list'); //to list the retailers
Route::get('retailers/show-new', 'HomeController@retailers_view'); //For both show and new

//categories
Route::get('categories', 'HomeController@categories_list'); //to list categories and filter by type
Route::get('categories/show-new', 'HomeController@categories_view'); //to list categories and filter by type


//products
Route::get('products', 'HomeController@products_list'); //to list categories and filter by type
Route::get('products/show-new', 'HomeController@products_view'); //to list categories and filter by type
Route::get('products-prices', 'HomeController@products_prices'); //to list categories and filter by type


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
