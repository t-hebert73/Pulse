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

		$showsResults = Show::all();

		return View::make('adminShows')->with('data', $showsResults);
    }

	public function showAddAShow(){

		return View::make('adminAddShow');

	}

	public function removeShow($id){

		$show = Show::find($id);
		$show->delete();

		return Redirect::to('admin/shows')->with('removeStatus', 'Show removed.');

	}

	public function addShow(){

		$inputs = Input::all();

		$dateRaw = $inputs['date'];
		$date = date('Y-m-d', strtotime($dateRaw));

		$time = $inputs['time'];
		$location = $inputs['location'];

		if(!empty($date) && !empty($time) && !empty($location)){

			DB::insert("insert into shows (date, time, location) values ('$date','$time','$location')");

			$data = array(
				'formStatus' => 'success',
				'formMessage' => '<strong>Success!</strong> Thank you for adding a show.');
		}else{

			$data = array(
				'formStatus' => 'failed',
				'formMessage' => '<strong>Failed!</strong> Make sure to fill out the entire form.',
				'addShowForm' => array(
					'date' => $date,
					'time' => $time,
					'location' => $location
					));
		}

		return View::make('adminAddShow')->with('data', $data);
	}

}
