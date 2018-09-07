<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class AdminpanelController extends Controller
{
    public function view(){
        return view('adminpanel.adminmain');
    }

    public function viewAddProduct(){
        return view('adminpanel.addproduct');
    }

    public function viewShowProduct(){
        $products = Product::get();
        return view('adminpanel.showproduct',compact('products'));
    }

    public function viewAddCategory(){
        return view('adminpanel.addcategory');
    }

    public function viewShowCategory(){
        $categories = Category::get(); 
        return view('adminpanel.showcategory',compact('categories'));
    }
}
