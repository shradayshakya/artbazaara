<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    
    public function register(Request $request){
        $category = new Category;
        $category->name = $request->name;
        $category->desc = $request->desc;
        $category->save();
        return redirect('/adminpanel');
    }  
}




