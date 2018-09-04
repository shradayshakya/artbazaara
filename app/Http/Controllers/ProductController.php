<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function display(Product $product){
        return view('product',compact('product'));
    }
}


