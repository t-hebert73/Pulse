<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 4/25/15
 * Time: 10:27 AM
 */

class SongsController extends \BaseController{

    public function index(){

        $songs = Song::all();

        return View::make('songs.index')->with('songs', $songs);
    }

    public function create(){

        return View::make('songs.create');

    }

    public function store(){

        $rules = array(
            'title' => 'required',
            'song' => 'required'
        );

        $messages = array(
            'title.required' => 'Please enter a title for the song',
            'song.required' => 'Upload a song file.'
        );

        $input = Input::all();

        $validator = Validator::make($input, $rules, $messages);

        if($validator->fails()){

            return Redirect::to('songs/create')->withErrors($validator)->withInput();
        }else{

            $song = new Song;

            $song->title = $input['title'];
            $song->file_name = $input['song']->getClientOriginalName();

            $input['song']->move('public/audio/uploaded', $song->file_name);

            $song->save();

            Session::flash('message', 'Song file successfully uploaded');
            return Redirect::to('songs/create');
        }
    }

    public function destroy($id){

        $song = Song::find($id);
        $filename = $song->file_name;

        $result = File::delete(public_path().'/audio/uploaded/'.$filename);

        if($result){
            $song->destroy($id);
            Session::flash('message', 'Sucessfully deleted the image');
        }else{
            Session::flash('message', 'Unable to delete image. contact Max/Trevor');
        }

        return Redirect::to('songs');
    }

    public function edit($id){

    }

}