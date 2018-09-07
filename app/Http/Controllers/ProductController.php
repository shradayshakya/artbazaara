<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function view($productid){
        $products = DB::select('
        select 
            products.id,products.name, products.artist, 
            products.artist, products.image,products.category, 
            products.category,purchases.price
        from
            (select 
                products.id, products.name,
                products.artist, products.image,
                categories.name as category
            from 
                products
            inner join categories
            on products.category_id = categories.id) as products 
        inner join purchases 
        on products.id = purchases.product_id
        where products.id = ?
        ',[$productid]);
        
        return view('product',['products'=> $products, 'categories'=> Category::get()]);
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


