<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class picturehandling extends Controller
{
    function uppic(Request $req) {
        $file = $req->file('file');
        $file->move(public_path().'/img',session('name'). '.png');

        return view('profile');
    }
}
