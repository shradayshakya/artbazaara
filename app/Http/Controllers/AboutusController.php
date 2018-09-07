<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class AboutusController extends Controller
{
    public function view(){
        $categories = Category::get();
        return view('aboutus',compact('categories'));
    }
}
