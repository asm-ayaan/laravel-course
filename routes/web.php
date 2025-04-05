<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
    return view('home');
});

Route::get('/about', function() {
    $name = "ayaan khan";
    $planets = ['Mercury', 'Venus', 'Erth', 'Mars', 'Jupiter'];

    // return view('about', ['my_name' => $name, 'planets' => $planets]);
    return view('about', compact('name', 'planets'));

});

Route::get('/contact', function() {
    return view('pages.contact');
});


