<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function __contruct(){
        $this->middleware('guest:admin');
    }
    public function showLoginForm(){
        return view('adminpanel.login');
    }

    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        if(Auth::guard('admin')->attempt(['email'=>$request->email, 'password'=> $request->password])){
            return redirect()->intended('/adminpanel');
        }else{
            return redirect()->back()->withInput($request->only('email'));
        }
    }


}
