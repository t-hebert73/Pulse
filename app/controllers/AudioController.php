<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 4/25/15
 * Time: 10:27 AM
 */

class AudioController extends \BaseController{

    public function index(){

        $audio = Audio::all();

        return View::make('audio.index')->with('audio', $audio);
    }

    public function create(){

        return View::make('audio.create');

    }

    public function store(){

        $input = Input::all();

        $audio = new Audio;

        $audio->file_name = $input['audio']->getClientOriginalName();

        $input['audio']->move('public/audio/uploaded', $audio->file_name);

        $audio->save();

        Session::flash('message', 'Audio file successfully uploaded');
        return Redirect::to('audio.create');

    }
}