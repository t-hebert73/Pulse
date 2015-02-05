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
 * Shows
 */
Route::get('shows', function()
{
    return View::make('shows');
});

/*
 * Admin Panel
 */

Route::get('admin', 'AdminController@showAdminPanel');

/*
|--------------------------------------------------------------------------
| Post Routes
|--------------------------------------------------------------------------
*/

/*
 * Contact
 */
Route::post('contact', 'ContactController@ContactUsForm');