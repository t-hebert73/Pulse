<?php

class ImageController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//

		$images = Image::all();

		return View::make('images.index')->with('images', $images);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('images.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//

		$rules = array(
			'caption' => 'required',
			'image' => array('required', 'image')
		);

		$input = Input::all();

		$validator = Validator::make($input, $rules);

		if($validator->fails()){
			return Redirect::to('photos.create')->withErrors($validator)->withInput();
		}else{
			$image = new Image;

			$image->caption = $input['caption'];
			$image->file_name = $input['image']->getClientOriginalName();

			$input['image']->move('public/images/uploaded', $image->file_name);

			$image->save();

			Session::flash('message', 'Successfully added an image!');
			return Redirect::to('photos');
		}



	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
