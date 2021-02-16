<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class mailcontroller extends Controller
{
    function sendmail(Request $req) {

        $name = $req->input('name');
        $email = $req->input('from');
        $subject = $req->input('subject');
        $content = $req->input('content');


        if($name != null AND $email != null AND $subject != null AND $content != null) {

            DB::insert('insert into contacts (name, email, subject) values (?, ?, ?)', [$name, $email, $subject]);
            Storage::disk('local')->put($req->input('subject'). '.txt', $req->content);

        } else {
            return "du hast nicht alle angaben gemacht";
        }


        





    }
    function readmail(Request $req) {


        $subject = DB::table('contacts')->where('name', $req->input('name'))->pluck('subject');
        $arraytoremove = array('[','"',']');
        $newsubject = str_replace($arraytoremove, "", $subject);
        $content = Storage::get($newsubject. '.txt');

        return "The Subject is". $newsubject. "   ". "with the message". $content;
    }

    function removemail(Request $req) {
        $name = $req->input('name');
        Storage::delete($name. '.txt');


        DB::delete('delete from contacts where name = ?',[$name]);

        return "Beitrag entfernt!";

    }
}
