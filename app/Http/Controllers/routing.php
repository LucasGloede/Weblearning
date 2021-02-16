<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class routing extends Controller
{
    function login() {
        return view('userlogin');
    }

    function register() {
        return view('userregister');
    }

    function contact() {
        return view('contact');
    }

}
