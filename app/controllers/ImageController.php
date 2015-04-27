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
			return Redirect::to('photos/create')->withErrors($validator)->withInput();
		}else{
			$image = new Image;

			$image->caption = $input['caption'];
			$image->file_name = $input['image']->getClientOriginalName();

			$input['image']->move('public/images/uploaded', $image->file_name);

			$image->save();

			Session::flash('message', 'Successfully added a photo!');
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
	public function edit($id){
		/*
		$image = Image::find($id);

		$imageFile = File::get(public_path() . '/images/uploaded/' . $image->file_name);

		$image->imageobject = $imageFile;
		return View::make('images.edit')->with('photo', $image);
		*/
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
	public function destroy($id){

		$image = Image::find($id);
		$filename = $image->file_name;

		$result = File::delete(public_path().'/images/uploaded/'.$filename);

		if($result){ //only delete the image from the DB if the image was successfully deleted from filesystem
			$image->destroy($id);
			Session::flash('message', 'Successfully deleted the photo.');
		}else{
			Session::flash('message', 'Something went wrong when deleting the photo.');
		}

		//redirect
		return Redirect::to('photos');

	}


}
