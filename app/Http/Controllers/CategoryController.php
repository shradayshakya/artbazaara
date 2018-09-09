<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function view($id){
        $categories = Category::get();
        $products = DB::table('products')->where('category_id','=',$id)->get();
        //dd($products);
        return view('category',[
            'categories' => $categories,
            'products' => $products
            ]);
    }
}




