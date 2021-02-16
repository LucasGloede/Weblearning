<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class reghandling extends Controller
{
    function reguser(Request $req) {

        $name = DB::table('website_users')->where('user_name', $req->input('username'))->pluck('user_name');
        $password = DB::table('website_users')->where('user_password', $req->input('password'))->pluck('user_password'); 
        $arraytoremove = array('[','"',']');
        $newname = str_replace($arraytoremove, "", $name);
        $newpassword = str_replace($arraytoremove, "", $password);
        $email = $req->input('email');


        if(empty($newname)) {
           
                DB::insert('insert into website_users (user_name, user_password, rang) values (?, ?, "guest")', [$req->input('username'), $req->input('password')]);

                return "Du wurdest erfolgreich Registriert";

            } else {
                return "Den Benutzer gibt es schon";
            }
                
                
            
    
        
    
    }
}
               
            
        



