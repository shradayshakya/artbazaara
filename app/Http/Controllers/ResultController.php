<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class ResultController extends Controller
{
    public function view(){
        $categories = Category::get();
        return view('result',compact('categories'));
    }
}
