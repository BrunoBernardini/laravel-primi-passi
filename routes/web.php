<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $data = [
        "name"=>"Bruno",
        "time"=>13,
        "votes"=>[7,6,8,6,9,8]
    ];
    return view('home', $data);
})->name("home");

Route::get("/about", function(){
    return view("about");
})->name("about");

Route::get("/donate", function(){
    return view("donate");
})->name("donate");


