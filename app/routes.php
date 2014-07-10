<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('contact', function()
{
    return View::make('contact');
});

Route::post('contact', function() {

    $fromName = Input::get('name');
    $fromEmail = Input::get('email');
    $subject = Input::get('subject');
    $data = array('msg' => Input::get('msg'));


    $toEmail = 'Pulsebandinfo1@gmail.com';
    $toName = 'Pulse Band';

    Mail::send('emails.contact', $data, function($message) use ($toEmail, $toName, $fromEmail, $fromName, $subject)
    {
        $message->to($toEmail, $toName);

        $message->from($fromEmail, $fromName);

        $message->subject($subject);
    });

    return Redirect::to('/contact');
});

Route::get('theband', function()
{
    return View::make('theband');
});

Route::get('media', function()
{
    return View::make('media');
});

Route::get('shows', function()
{
    return View::make('shows');
});


Route::get('/','HomeController@showHome');

