<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function __construct(){
        $this->middleware('guest', ['except'=>'destroy']);
    }

    public function view(){
        $categories =\App\Category::get();
        return view('login',compact('categories'));
    }

    public function viewWithProductId($productId){
        $categories =\App\Category::get();
        return view("login",[
            'categories'=>$categories,
            'productId' =>$productId
        ]);
    }

    public function store(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            if($request->input('productId')){
                $productId = $request->input('productId');
                return redirect("/product/$productId");
            }
            else{
                return redirect('/');    
            }
        }else{
            if($request->input('productId')){
                $productId = $request->input('productId');
                return redirect("/login/$productId")->withErrors([
                    'messege' => "Invalid email or password"
                ]);;
            }
            else{
                return redirect("/login")->withErrors([
                    'messege' => "Invalid email or password"
                ]); 
            }
        }

    }
    
    public function destroy(){
        auth()->logout();
        return redirect('/');
    }
}
