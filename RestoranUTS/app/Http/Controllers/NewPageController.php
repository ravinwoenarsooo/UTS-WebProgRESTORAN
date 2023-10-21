<?php

namespace App\Http\Controllers;

class NewPageController extends Controller
{
    public function home(){
        return view('home');
    }

    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function menu(){
        return view('menu');
    }

    public function forgotpassword(){
        return view('forgotpassword');
    }
}
