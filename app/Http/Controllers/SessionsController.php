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

    public function store(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            return redirect('/');
        }else{
            return back()->withErrors([
                'messege' => "Invalid email or password"
            ]);
        }

    }
    
    public function destroy(){
        auth()->logout();
        return redirect('/');
    }
}
