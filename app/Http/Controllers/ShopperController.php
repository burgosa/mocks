<?php namespace App\Http\Controllers;

class ShopperController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('shopper.index');
	}

	public function order_proposed()
	{
		return view('shopper.order');
	}

	public function order_info()
	{
		return view('shopper.info');
	}

	public function retailer_1()
	{
		return view('shopper.retailer1');
	}

	public function retailer_2()
	{
		return view('shopper.retailer2');
	}

	public function retailer_2_revision()
	{
		return view('shopper.retailer-2-revision');
	}

	public function retailer_2_revision_end()
	{
		return view('shopper.retailer-2-revision-end');
	}

	public function product()
	{
		return view('shopper.product');
	}

	public function replacement()
	{
		return view('shopper.replacement');
	}

}
