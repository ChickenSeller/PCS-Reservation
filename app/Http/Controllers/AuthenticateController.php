<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class AuthenticateController extends Controller
{
    static public function Login(){
        if(\Auth::attempt(array('name' => Input::get('name'), 'password' =>Input::get('password')))){
            return view('home');
        }else{
            return view('auth.login');
        }
    }
    static public function Logout(){
        \Auth::logout();
        if(!\Auth::user()){
            return view('auth.login');
        }
    }
}
