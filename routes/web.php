<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/test', function(){
//     return "this is about page";
// })->name('about');

// Route::get('/profile', function(){
//     return "this is a profile page";
// });

Route::get('/users/{id}', function($id) {
    return "user $id";
});

Route::get('/post/{postId}/comment/{commentId?}', function($postId, $commentId = 0){
    return "Post ID: $postId - Comment Id: $commentId";
})->name('post');

