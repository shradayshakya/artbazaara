<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Order;

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
}
