<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Delivery;
use App\Order;

class AdminpanelController extends Controller
{

    public function __construct(){
        $this->middleware('auth:admin');
    }
    //, ['except' => ['login']]

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
                products.image,products.category, 
                products.category,purchases.price
            from
                (select 
                    products.id, products.name,
                    products.artist, products.image,
                    categories.name as category
                from 
                    products
                inner join categories
                on products.category_id = categories.id
                where products.sold=false) as products 
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

    public function viewShowOrder(){
    
        $orders = DB::select('
            select 
                orders.id,orders.name, users.email, users.phone
            from
                (select 
                    orders.id, products.name, orders.user_id
                from 
                    orders
                inner join products
                on orders.product_id = products.id) as orders 
            inner join users 
            on orders.user_id = users.id;
            ');
       // dd($orders);
        return view('adminpanel.showorder',compact('orders'));
    }

    public function viewShowDeliver(){
    
        
        $deliveries = DB::select('
            select 
            deliveries.id,deliveries.name, users.email, users.phone
            from
                (select 
                deliveries.id, products.name, deliveries.user_id
                from 
                deliveries
                inner join products
                on deliveries.product_id = products.id) as deliveries 
            inner join users 
            on deliveries.user_id = users.id;
            ');
       // dd($orders);
        return view('adminpanel.showdeliver',compact('deliveries'));
    }

    public function viewShowSales(){
        $sales = DB::select('
        select
        sales.id, sales.name,
        sales.supplier,
        sales.cost, sales.price,
        users.email
        from
           (select 
            products.name,products.supplier, 
            products.cost,products.price,
            sales.id, sales.user_id
            from
                (select 
                    products.id,products.name,
                    purchases.supplier,
                    purchases.cost,purchases.price
                from
                    products 
                inner join purchases 
                on products.id = purchases.product_id) as products
            inner join sales
            on sales.product_id = products.id) as sales 
        inner join users
        on sales.user_id = users.id;
        ');
        return view('adminpanel.showsales',compact('sales'));
    }


    public function viewShowUsers(){
        $users = DB::select('
            SELECT sales.delivered_orders, users.name, users.email, users.phone
            FROM
                (SELECT count(sales.id) as delivered_orders, sales.user_id 
                FROM sales 
                group by sales.user_id 
                order by count(sales.id) DESC) AS sales
            INNER JOIN users
            ON sales.user_id = users.id
        ');
        return view('adminpanel.showuser',compact('users'));
    }

    public function viewAddCategory(){
        return view('adminpanel.addcategory');
    }

    public function viewShowCategory(){
        $categories = Category::get(); 
        return view('adminpanel.showcategory',compact('categories'));
    }

    public function viewCarousel(){
        $carousel = DB::table('carousels')->get();
        //dd($carousel);
        return view('adminpanel.showcarousel',compact('carousel'));
    }

    
    public function productRegister(Request $request){
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


    public function categoryRegister(Request $request){
        $this->validate(request(),[
            'name'=>'required',
            'desc'=>'required',
        ]);
        $category = new Category;
        $category->name = $request->name;
        $category->desc = $request->desc;
        $category->save();
        return redirect('/adminpanel/addcategory');
    }  

    public function orderConfirm($id){
        $order = DB::table('orders')->where('id',$id)->first();
        $delivery = new Delivery;
        $delivery->user_id = $order->user_id;
        $delivery->product_id = $order->product_id;
        $delivery->save();
        DB::table('orders')->where('id',$id)->delete();
        return redirect('adminpanel/showorder');
    }

    public function orderDecline($id){
        DB::table('orders')->where('id',$id)->delete();
        return redirect('adminpanel/showorder');
    }

}
