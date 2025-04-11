<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Blog;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'about'])->name('about');

Route::get('/blog/create', function() {
    // create data with eloquent orm
    $blog = new Blog();
    $blog->title = 'this is our first blog 2';
    $blog->description = 'this is a test descripiton 2';
    $blog->image = '/uploads/test.php';
    $blog->save();

    return $blog;

});