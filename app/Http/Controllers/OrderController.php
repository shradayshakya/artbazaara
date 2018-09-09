<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Order;
use App\Delivery;

class OrderController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function placeorder(Request $request, $id){
        $order = new Order;
        $order->user_id =  auth()->id();
        $order->product_id = $id;
        $order->save();
        $categories = Category::get();
        return view('order',compact('categories'));
    }

    public function confirm($id){
        $order = DB::table('orders')->where('id',$id)->first();
        $delivery = new Delivery;
        $delivery->user_id = $order->user_id;
        $delivery->product_id = $order->product_id;
        $delivery->save();
        DB::table('orders')->where('id',$id)->delete();
        return redirect('adminpanel/showdeliver');
    }

    public function decline($id){
        DB::table('orders')->where('id',$id)->delete();
        return redirect('adminpanel/showorder');
    }
}
