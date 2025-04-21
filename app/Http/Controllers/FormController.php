<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FormController extends Controller
{
    function index() {
       return view('form.index'); 
    }

    function store(Request $request) {
        // $request->validate([
        //     // 'title' => 'required|min:5|max:20',
        //     'title' => ['required', 'min:5', 'max:20'],

        //     'description' => 'required|min:5|max:2000'
        // ], [
        //     'title.required' => 'Hey your are missing this field',
        //     'title.min' => 'title must be getter then :min careacters',
        //     'title.max' => 'title must be less then :max careacters', 
        // ]); 


        // $post = new Post();
        // $post->title = $request->title;
        // $post->body = $request->description;
        // $post->user_id = 1;
        // $post->save();

        $image = $request->file('image');
        $image->store('/images', 'public');

        return 'success';
    }       
}
