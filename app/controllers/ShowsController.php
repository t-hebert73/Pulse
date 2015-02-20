<?php

class ShowsController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Admin Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

    public function showShowsPanel(){

		return View::make('adminShows');
    }

	public function showAddAShow(){

		return View::make('adminAddShow');
		
	}

	public function showRemoveAShow(){

		return View::make('adminRemoveShow');

	}

}
