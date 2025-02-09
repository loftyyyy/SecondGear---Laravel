<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/home', function (){
    return view('/home');

});

Route::get('/home/user/{id}', function($id){

    return "$id";

}) -> where('id', '[0-9]+');

//Named Route

//Auth
Route::get("/signup", function(){
    return view("signup");

})->name("authentications.signup");


Route::get("/login", function(){
    return view("login");

})->name("authentications.login");

