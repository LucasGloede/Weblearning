<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class questionprooving extends Controller
{
    
    
    
    public static function sendside(Request $req) {
    
       
        

            return view('questionside');
        


            
    }

    



}
