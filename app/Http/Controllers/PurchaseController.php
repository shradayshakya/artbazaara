<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Purchase;

class PurchaseController extends Controller
{
    public function register(Request $request, $productid){
        $purchase = new Purchase;
        $purchase->supplier = $request->input('supplier');
        $purchase->phone = $request->input('phone');
        $purchase->product_id = $productid;
        $purchase->cost = $request->input('cost');
        $purchase->price = $request->input('price');
        $purchase->save();
    }
}
