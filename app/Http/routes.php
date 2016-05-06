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
Route::get('/order_info', function () {
    // return view('index');
    return view('order_info');
});

Route::get('/', function () {
    // return view('index');
    return view('welcome');
});

Route::get('/admin', function () {
    // return view('index');
    return view('dashboard');
});

Route::get('/form', function () {
    return view('index');
    //return view('welcome');
});

Route::get('/login', function () {
    return view('login');
    //return view('welcome');
});
