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

    public function index(){

		$shows = Show::all();

		return View::make('shows.index')->with('shows', $shows);
    }

	public function create(){

		return View::make('shows.create');

	}

	public function show(){

	}

	public function update($id){

		$rules = array(
			'date'		=> 'required',
			'time'		=> 'required',
			'location'	=> 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		$dateRaw = Input::get('date');
		$date = date('Y-m-d', strtotime($dateRaw));

		$time = Input::get('time');
		$location = Input::get('location');

		if($validator->fails()) {
			return Redirect::to('shows/create')->withErrors($validator)->withInput(Input::all());
		}else{
			$show = Show::find($id);

			$show->date = $date;
			$show->time = $time;
			$show->location = $location;

			$show->save();

			Session::flash('message', 'Successfully updated the show!');
			return Redirect::to('shows');
		}

	}

	public function edit($id){
		$show = Show::find($id);
		return View::make('adminEditShow')->with('show', $show);
	}

	public function destroy($id){

		$show = Show::find($id);
		$show->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the show.');
		return Redirect::to('shows');

	}

	public function store(){

		$rules = array(
			'date'		=> 'required',
			'time'		=> 'required',
			'location'	=> 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		$dateRaw = Input::get('date');
		$date = date('Y-m-d', strtotime($dateRaw));

		$time = Input::get('time');
		$location = Input::get('location');

		if($validator->fails()) {
			return Redirect::to('shows/create')->withErrors($validator)->withInput(Input::all());
		}else{
			$show = new Show;

			$show->date = $date;
			$show->time = $time;
			$show->location = $location;

			$show->save();

			Session::flash('message', 'Successfully created a show!');
			return Redirect::to('shows');
		}


	}

}
