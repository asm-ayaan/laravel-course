<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        $posts = Blog::all();
        echo $posts;
        return view('home');
    }


}
