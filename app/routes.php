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
    return View::make('contact');
});

/*
 * Email Success
 */
Route::get('emailSuccess', function(){
    return View::make('emailSuccess');
});

/*
 * The Band
 */
Route::get('theband', function()
{
    return View::make('theband');
});

/*
 *  Media
 */

Route::get('media', function()
{
    return View::make('media');
});

/*
 * Gallery
 */
Route::get('gallery', function()
{
    return View::make('gallery');
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
   return View::make('login');
});

/*
 *Admin Add Images
 */
Route::get('admin/images/add', array('before' => 'auth', 'uses' => 'ImageController@AddAnImage'));


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
 * Add Image
 */

Route::post('addImage', 'ImageController@addImage');


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
});

