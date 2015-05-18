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

        //Get the extension of the uploaded file
        $extension = pathinfo($input['song']->getClientOriginalName(), PATHINFO_EXTENSION);

        //Array of allowed extensions
        $acceptedFileTypes = array('mp3', 'MP3', 'wav', 'wma');

        $validator = Validator::make($input, $rules, $messages);

        //If validation rules fail, redirect with errors
        if($validator->fails()){

            return Redirect::to('songs/create')->withErrors($validator)->withInput();
        }else{

            //If the extension is not valid; redirect with error, otherwise proceed to add file
            if(!in_array($extension , $acceptedFileTypes)){

                return Redirect::to('songs/create')->with('failed', 'File must be of type mp3, wav, or wma');
            }else{

                $song = new Song;

                $song->title = $input['title'];
                $song->file_name = $input['song']->getClientOriginalName();

                $input['song']->move('public/audio/uploaded', $song->file_name);

                $song->save();

                return Redirect::to('songs/create')->with('success', 'Song file successfully uploaded!');
            }
        }
    }

    public function destroy($id){

        $song = Song::find($id);
        $filename = $song->file_name;

        $result = File::delete(public_path().'/audio/uploaded/'.$filename);

        if($result){

            $song->destroy($id);
            Session::flash('message', 'Sucessfully deleted the song');
        }else{

            Session::flash('message', 'Unable to delete image. contact Max/Trevor');
        }

        return Redirect::to('songs');
    }

}