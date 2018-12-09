<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;

class CategoryController extends Controller
{
    public function view($id){
        $categories = Category::get();
        $products = DB::table('products')->where('category_id','=',$id)->where('sold',0)->get();
        //dd($products);
        return view('category',[
            'categories' => $categories,
            'products' => $products
            ]);
    }
}




