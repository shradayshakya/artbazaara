<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Category;
use App\User;

class RegistrationController extends Controller
{
    public function __construct(){
        $this->middleware('guest');
    }

    public function view(){
        $categories = Category::get();
        return view('signup',compact('categories'));
    }

    public function store(Request $request){
        $this->validate(request(),[
            'name'=>'required',
            'email'=>'required|email',
            'password' => 'required|confirmed',
            'phone' => 'required',
            'address' => 'required'
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $password = Hash::make($request->input('password'));
        $phone = $request->input('phone');
        $address = $request->input('address');

        $user = User::create([
            'name'=>$name,
            'email'=>$email,
            'password'=>$password,
            'phone'=>$phone,
            'address'=>$address
        ]);

        auth()->login($user);
        return redirect('/');
    }
}
