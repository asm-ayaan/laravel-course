<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Blog;
use App\Models\Company;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'about'])->name('about');

// Route::get('/blog/create', function() {
//     // create data with eloquent orm
//     $blog = new Blog();
//     $blog->title = 'this is our first blog 2';
//     $blog->description = 'this is a test descripiton 2';
//     $blog->image = '/uploads/test.php';
//     $blog->save();

//     return $blog;

// });

// Route::get('/blog', function(){
//     // $blogs = Blog::all();
//     // $blogs = Blog::first();
//     // $blogs = Blog::select(['id', 'title', 'description' ])->get();\
//     $blogs = Blog::where('id', 1)->where('title', 'this is updated title 2')->get();
//     return $blogs;
// });

// Route::get('/blog/update/{id}', function($id){
//     $blog = Blog::findOrFail($id);
//     $blog->title = 'this is updated title 2';
//     $blog->description = 'this is updated description 2';
//     $blog->image = 'test test';
//     $blog->save();

//     return $blog;
// });

// Route::get('/blog/delete/{id}', function($id){
//     $blog = Blog::find($id);
//     $blog->delete();

//     return 'success';
// });



Route::get('user', function() {
    // $user = User::find(1);
    // $company = Company::find(1);

    $user = User::find(1);

    return view('user', compact('user'));
});

Route::get('posts', function(){
    $post = Post::find(2);

    $post->tags()->attach([1]);

    return $post;
});

Route::get('post-tags', function(){
    $posts = Tag::find(1)->posts;
    return $posts;
});