<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\loginhandling;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Main site route

Route::view('/', 'index');
Route::view('admin', 'admin');

//dont even know why i did it but i get errors when i remove it lol
//so i guess just go to the question side?

Route::get('userlogin', 'App\Http\Controllers\routing@login');
Route::get('userrregister', 'App\Http\Controllers\routing@register');
Route::get('contact', 'App\Http\Controllers\routing@contact');

//check if input is valid

//Handles the Loginthings there
Route::post('logintheuser', 'App\Http\Controllers\loginhandling@Database_get');
Route::post('logout', 'App\Http\Controllers\loginhandling@logout');

Route::get('readpost', 'App\Http\Controllers\blogposthandling@readpost');

Route::post('reguser', 'App\Http\Controllers\reghandling@reguser');

Route::post('readmail', 'App\Http\Controllers\mailcontroller@readmail');
Route::post('removemail', 'App\Http\Controllers\mailcontroller@removemail');


Route::post('blogpost', 'App\Http\Controllers\blogposthandling@writepost');

Route::post('mail', 'App\Http\Controllers\mailcontroller@sendmail');

Route::post('uploadpic', 'App\Http\Controllers\picturehandling@uppic');

Auth::routes();




