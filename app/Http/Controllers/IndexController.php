<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Product;

class IndexController extends Controller
{
    public function view(){
        $categories = Category::get();
        $carousel = Db::table('carousel')->get();
        $products = DB::table('products')->where('sold',0)->orderBy('created_at','desc')->limit(4)->get();
        //dd($products);
        return view('index',[
            'categories' => $categories,
            'carousel' => $carousel,
            'products' => $products
            ]);
    }
}
