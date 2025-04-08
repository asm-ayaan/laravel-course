<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        $posts = Post::all();
        echo $posts;
        return view('home');
    }


}
