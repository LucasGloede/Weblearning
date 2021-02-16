<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class blogposthandling extends Controller
{
    function writepost(Request $req) {


        $subject = $req->input('title');

        $content = $req->input('content');

        $id = $req->input('id');

        $arraytoremove4 = array('[','"',']');
        $resultofremove4 = str_replace($arraytoremove4, "", $subject);

        $id1 = DB::table('blogpost_subjects')->where('id', "1")->pluck('id');
        $subject1 = DB::table('blogpost_subjects')->where('id', "1")->pluck('subject');
        $arraytoremove1 = array('[','"',']');
        $resultofremove1 = str_replace($arraytoremove1, "", $subject1);

        $id2 = DB::table('blogpost_subjects')->where('id', "2")->pluck('id');
        $subject2 = DB::table('blogpost_subjects')->where('id', "2")->pluck('subject');
        $arraytoremove2 = array('[','"',']');
        $resultofremove2 = str_replace($arraytoremove2, "", $subject2);

        $id3 = DB::table('blogpost_subjects')->where('id', "3")->pluck('id');
        $subject3 = DB::table('blogpost_subjects')->where('id', "3")->pluck('subject');
        $arraytoremove3 = array('[','"',']');
        $resultofremove3 = str_replace($arraytoremove3, "", $subject3);


        if($id=="1") {


            $change2 = DB::update('update blogpost_subjects set subject = ? where id = 2', [$resultofremove1]);
            $change3 = DB::update('update blogpost_subjects set subject = ? where id = 3', [$resultofremove2]);
            $maxid1 = DB::select('select max(id) from blogpost_subjects');
            $arrayremoveidmax1 = array('[','"',']');

            



            DB::insert('insert into blogpost_subjects (id, subject) values (?, ?)', ['4', $resultofremove3]);



            DB::update('update blogpost_subjects set subject = ? where id = 1',[$resultofremove4]);
            Storage::disk('local')->put($resultofremove4. '.txt', $content);
        }
        else if($id=="2") {

        }
        else if($id=="3") {

        }
        else if($id!=="1" or "2" or "3") {

            $arraytoremove5 = array('[','"',']');
            $resultofremove5 = str_replace($arraytoremove5, "", $subject);

            DB::insert('insert into blogpost_subjects (id, subject) values (?, ?)', [$id, $resultofremove5]);


        
        
            Storage::disk('local')->put($subject. '.txt', $content);

        }

       
        
        

    }
    function readpost(Request $req) {


        $id1 = DB::table('blogpost_subjects')->where('id', "1")->pluck('id');
        $subject1 = DB::table('blogpost_subjects')->where('id', "1")->pluck('subject');
        $arraytoremove1 = array('[','"',']');
        $resultofremove1 = str_replace($arraytoremove1, "", $subject1);
        $contents1 = Storage::get($resultofremove1. '.txt');

        $id2 = DB::table('blogpost_subjects')->where('id', "2")->pluck('id');
        $subject2 = DB::table('blogpost_subjects')->where('id', "2")->pluck('subject');
        $arraytoremove2 = array('[','"',']');
        $resultofremove2 = str_replace($arraytoremove2, "", $subject2);
        $contents2 = Storage::get($resultofremove2. '.txt');

        $id3 = DB::table('blogpost_subjects')->where('id', "3")->pluck('id');
        $subject3 = DB::table('blogpost_subjects')->where('id', "3")->pluck('subject');
        $arraytoremove3 = array('[','"',']');
        $resultofremove3 = str_replace($arraytoremove3, "", $subject3);
        $contents3 = Storage::get($resultofremove3. '.txt');

        return view('blogpage', ['content'=>$contents1, 'subject'=>$resultofremove1, 'content2'=>$contents2, 'subject2'=>$resultofremove2, 'content3'=>$contents3, 'subject3'=>$resultofremove3]);

        
        
    }
}
