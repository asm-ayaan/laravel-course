<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'about'])->name('about');