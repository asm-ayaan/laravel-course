<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function(){
    return "this is about page";
})->name('about');

Route::get('/profile', function(){
    return "this is a profile page";
});
