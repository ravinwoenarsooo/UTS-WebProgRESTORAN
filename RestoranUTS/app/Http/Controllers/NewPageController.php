<?php

namespace App\Http\Controllers;

class NewPageController extends Controller
{
    public function admin(){
        return view('admin');
    }
    public function adminui(){
        return view('adminui');
    }
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

    public function newpassword(){
        return view('newpassword');
    }

    public function alacarte(){
        return view('alacarte');
    }
    public function beverages(){
        return view('beverages');
    }
    public function dessert(){
        return view('dessert');
    }
    public function ramen(){
        return view('ramen');
    }
    public function rice(){
        return view('rice');
    }
    public function sushi(){
        return view('sushi');
    }
}
