<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*
Route:;get('reg',function(){
   $data = array();
    $data['name']= \Illuminate\Support\Facades\Input::get('name');
    $data['email'] =  \Illuminate\Support\Facades\Input::get('email');
    $data['password'] = \Illuminate\Support\Facades\Input::get('password');
    Auth
});
*/

//Route::auth();
//Route::auth();
Route::get('dashboard',function(){
   return view('dashboard');
});
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'AuthenticateController@Login');
Route::get('logout', 'AuthenticateController@Logout');
Route::get('register', 'Auth\AuthController@showRegistrationForm');
Route::post('register', 'Auth\AuthController@register');

// Password Reset Routes...
Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\PasswordController@reset');
Route::get('/home', 'HomeController@index');
Route::get('/test',function (){
    return \Auth::user();
});
Route::controller('/','OrderController');


