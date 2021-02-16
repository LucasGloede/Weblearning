<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\website_user;
use App\Models\blogpost_subject;
use App\Models\contact;

class loginhandling extends Controller
{
    

    public function Database_get(Request $req) {

        $allregistrations = website_user::All();
        $allposts = blogpost_subject::All();
        $name = DB::table('website_users')->where('user_name', $req->input('username'))->pluck('user_name');
        $password = DB::table('website_users')->where('user_password', $req->input('password'))->pluck('user_password');
        $rank = DB::table('website_users')->where('user_password', $req->input('password'))->pluck('rang');
        $arraytoremove = array('[','"',']');
        $newname = str_replace($arraytoremove, "", $name);
        $newpassword = str_replace($arraytoremove, "", $password);
        $newrank = str_replace($arraytoremove, "", $rank);
        $inputname = $req->input('username');
        $inputpassword = $req->input('password');
        
        if($newname == $inputname AND $newpassword == $inputpassword) {
            session()->put('name',$newname);
            session()->put('rank',$newrank);
            $sessionname = session('name');

             if($newrank == "guest" || null) {
                return view('profile');
             } else {
                $allcontacts = contact::All();
                return view('admin', ['posts'=>$allcontacts]);
             }
           
            
        }
        
        
      

    }

    function logout() {
        session()->flush();
        return view('profile');
    }


}
