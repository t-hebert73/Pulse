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

//GET CONTACT
Route::get('contact', function()
{
    return View::make('contact');
});

//POST CONTACT
Route::post('contact', 'ContactController@ContactUsForm');

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

