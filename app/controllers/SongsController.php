<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 4/25/15
 * Time: 10:27 AM
 */

class SongsController extends \BaseController{

    public function index(){

        $song = Song::all();

        return View::make('songs.index')->with('song', $song);
    }

    public function create(){

        return View::make('songs.create');

    }

    public function store(){

        $input = Input::all();

        $song = new Song;

        $song->title = $input['title'];
        $song->file_name = $input['song']->getClientOriginalName();

        $input['song']->move('public/songs/uploaded', $song->file_name);

        $song->save();

        Session::flash('message', 'Song file successfully uploaded');
        return Redirect::to('songs.create');

    }
}