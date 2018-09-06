<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function display(Product $product){
        return view('product',compact('product'));
    }

    public function register(Request $request){
        $product = new Product;
        $product->name = $request->input('name');
        $product->artist = $request->input('artist');
        $product->category = $request->input('category');
        $product->cost = $request->input('cost');
        $product->price = $request->input('price');
        $product->image = "/img/default.jpg";
        $product->save();
        return redirect('/addproduct');
    }

    public function show(){
        $products = Product::get();
        return view('adminpanel.showproduct',compact('products'));
    }
}


