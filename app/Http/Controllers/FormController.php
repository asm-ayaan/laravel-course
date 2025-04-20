<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function index() {
       return view('form.index'); 
    }

    function store(Request $request) {
        $request->validate([
            // 'title' => 'required|min:5|max:20',
            'title' => ['required', 'min:20', 'max:20'],

            'description' => 'required|min:5|max:2000'
        ], [
            'title.required' => 'Hey your are missing this field',
            'title.min' => 'title must be getter then :min careacters',
            'title.max' => 'title must be less then :max careacters', 
        ]); 
        return $request;
    }       
}
