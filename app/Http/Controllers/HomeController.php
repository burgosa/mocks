<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}

	public function retailers_list()
	{
		return view('retailers.retailers_list');
	}

	public function retailers_view()
	{
		return view('retailers.retailers_view');
	}

	public function categories_list()
	{
		return view('categories.categories_list');
	}

	public function categories_view()
	{
		return view('categories.categories_view');
	}

	public function products_list()
	{
		return view('products.products_list');
	}

	public function products_view()
	{
		return view('products.products_view');
	}

}
