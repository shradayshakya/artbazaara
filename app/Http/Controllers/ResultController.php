<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function view(){
        $categories = Category::get();
        return view('result',compact('categories'));
    }
}
