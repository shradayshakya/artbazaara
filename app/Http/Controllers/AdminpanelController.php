<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product;
use App\Category;

class AdminpanelController extends Controller
{
    public function view(){
        return view('adminpanel.adminmain');
    }

    public function viewAddProduct(){
        $categories = Category::get(); 
        return view('adminpanel.addproduct',compact('categories'));
    }

    public function viewShowProduct(){
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
            on products.id = purchases.product_id;
            ');
        //dd($products);
        return view('adminpanel.showproduct',compact('products'));
    }

    public function viewShowPurchase(){
        $purchases = DB::select('
            select 
                    purchases.id, products.name, 
                    purchases.supplier, purchases.phone,
                    purchases.cost, purchases.price
                from 
                    purchases
                inner join products
                on purchases.product_id = products.id
            ');
        //dd($purchases);
        return view('adminpanel.showpurchase',compact('purchases'));
    }

    public function viewAddCategory(){
        return view('adminpanel.addcategory');
    }

    public function viewShowCategory(){
        $categories = Category::get(); 
        return view('adminpanel.showcategory',compact('categories'));
    }
}
