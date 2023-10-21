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

    public function regis(){
        return view('regis');
    }
}
