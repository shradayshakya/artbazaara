<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;

class ResultController extends Controller
{
    public function view(Request $request){
        $data = $request->input('data');
        $data = "%".$data."%";
        $categories = Category::get();
        $productsByName = DB::table('products')->where('name','like',$data)->where('sold',0)->get();
        $productsByArtist = DB::table('products')->where('artist','like',$data)->where('sold',0)->get();
        
        return view('result',[
            'categories' => $categories,
            'productsByName' => $productsByName,
            'productsByArtist' => $productsByArtist,
            'request' => $request
            ]);
    }
}
