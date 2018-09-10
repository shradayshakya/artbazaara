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

    public function register(Request $request){
        $this->validate(request(),[
            'name'=>'required',
            'artist'=>'required',
            'category' => 'required',
            'supplier' => 'required',
            'phone' => 'required',
            'cost' => 'required',
            'price' => 'required',
            'input_img' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);

        $product = new Product;
        $product->name = $request->input('name');
        $product->artist = $request->input('artist');
        $product->category_id = $request->input('category');

        if ($request->hasFile('input_img')) {
            $image = $request->file('input_img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img/');
            $image->move($destinationPath, $name);
        }
        $product->image = '/img/'.$name;

        $product->save();
        $purchase = new PurchaseController; 
        $purchase->register($request, $product->id);
    
        return redirect('/adminpanel/addproduct');
    }
}


