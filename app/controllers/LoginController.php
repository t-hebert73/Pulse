<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 11/02/2015
 * Time: 10:14 PM
 */

class LoginController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Default Admin Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function attemptLogin(){


        $inputs = Input::all();


        $inputtedCredentials = array("user"=>$inputs['username'],"password"=>$inputs['password']);

        if (Auth::attempt($inputtedCredentials))
        {
            echo 'success atempt';
            return Redirect::intended('adminPanel');
        }else{
            return View::make('login');
        }

    }

}
