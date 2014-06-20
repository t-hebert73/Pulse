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

Route::get('theband', function()
{
    return View::make('theband');
});


Route::get('/', function()
{
    return View::make('home');
});

