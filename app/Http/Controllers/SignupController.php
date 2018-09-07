<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class SignupController extends Controller
{
    public function view(){
        $categories = Category::get();
        return view('signup',compact('categories'));
    }
}
