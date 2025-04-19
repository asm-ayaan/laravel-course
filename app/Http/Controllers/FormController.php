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
            'title' => ['required', 'min:5', 'max:20'],

            'description' => 'required|min:5|max:2000'
        ]); 
        return $request;
    }       
}
