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
        $productsByName = DB::table('products')->where('name','like',$data)->get();
        $productsByArtist = DB::table('products')->where('artist','like',$data)->get();
        
        return view('result',[
            'categories' => $categories,
            'productsByName' => $productsByName,
            'productsByArtist' => $productsByArtist,
            'request' => $request
            ]);
    }
}
