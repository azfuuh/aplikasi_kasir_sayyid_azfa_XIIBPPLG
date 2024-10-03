<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{


    function dashboard()

    {
        return view('Home');
    }
    function operator(){
        return view('home');

    }
    function keuangan(){
        return view('home');

    }
    function marketing(){
        return view('home');

    }

}