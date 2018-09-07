<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function view(){
        $categories = Category::get();
        return view('aboutus',compact('categories'));
    }
}
