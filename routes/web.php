<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    return "this is about page";
});

Route::get('/profile', function(){
    return "this is a profile page";
});
