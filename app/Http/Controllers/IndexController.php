<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class IndexController extends Controller
{
    public function view(){
        $categories = Category::get();
        return view('index',compact('categories'));
    }
}
