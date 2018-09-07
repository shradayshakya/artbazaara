<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CategoryController extends Controller
{
    
    public function register(Request $request){
        $category = new \App\Category;
        $category->name = $request->name;
        $category->desc = $request->desc;
        $category->save();
        return redirect('/adminpanel');
    }  
}




