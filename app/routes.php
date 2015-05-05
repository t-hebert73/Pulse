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

/*
|--------------------------------------------------------------------------
| Get Routes
|--------------------------------------------------------------------------
*/

/*
 * Home/Default
 */

Route::get('/','HomeController@showHome');

/*
 * Contact
 */
Route::get('contact', function()
{
    return View::make('pages/contact');
});

/*
 * Email Success
 */
Route::get('emailSuccess', function(){
    return View::make('pages/emailSuccess');
});

/*
 * The Band
 */
Route::get('theband', function()
{
    return View::make('pages/theband');
});

/*
 *  Media
 */

Route::get('media', function()
{
    $songs = Song::all();
    return View::make('pages/media')->with('songs', $songs);
});

/*
 * Gallery
 */
Route::get('gallery', function()
{
    $images = Image::all();

    return View::make('pages/gallery')->with('images', $images);
});

/*
 * Admin Panel
 */

Route::get('admin', array('before' => 'auth', 'uses' => 'AdminController@showAdminPanel'));


/*
 * Login
 */

Route::get('login', function()
{
   return View::make('pages/login');
});

/*
|--------------------------------------------------------------------------
| Post Routes
|--------------------------------------------------------------------------
*/

/*
 * Contact
 */
Route::post('contact', 'ContactController@ContactUsForm');

/*
 * Login
 */

Route::post('login', 'LoginController@attemptLogin');


/*
|--------------------------------------------------------------------------
| Grouped Routes
|--------------------------------------------------------------------------
*/

/*
 * routes for shows with auth
 */
Route::group(['before' => 'auth'], function(){
    Route::resource('shows', 'ShowsController');
    Route::resource('songs', 'SongsController');
    Route::resource('photos', 'ImageController');
});

