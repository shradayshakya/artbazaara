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
        $product->category_id = $request->input('category');
        $product->image = "/img/default.jpg";
        $product->save();
        $purchase = new PurchaseController; 
        $purchase->register($request, $product->id);
    
        return redirect('/adminpanel');
    }
}


