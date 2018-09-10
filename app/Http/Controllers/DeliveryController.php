<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Sales;

class DeliveryController extends Controller
{
    public function confirm($id){
        $delivery = DB::table('deliveries')->where('id',$id)->first();
        $sales = new Sales;
        $sales->user_id = $delivery->user_id;
        $sales->product_id = $delivery->product_id;
        $sales->save();
        DB::table('deliveries')->where('id',$id)->delete();


        DB::table('products')->where('id', $delivery->product_id)->update(['sold'=>1]);

        return redirect('adminpanel/showsales');
    }

    public function decline($id){
        DB::table('deliveries')->where('id',$id)->delete();
        return redirect('adminpanel/showdeliver');
    }
}
