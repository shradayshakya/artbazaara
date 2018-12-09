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
            products.sold, 
            products.artist, products.image,products.category, 
            products.category,purchases.price
        from
            (select 
                products.id, products.name,
                products.sold,
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
}


