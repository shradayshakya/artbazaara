<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function(){
    return view('index');
});

Route::get('/aboutus',function(){
    return view('aboutus');
});

Route::get('/login',function(){
    return view('login');
});

Route::get('/product/{product}', 'ProductController@display');

Route::get('/result',function(){
    return view('result');
});

Route::get('/signup',function(){
    return view('signup');
});

Route::post('/addproduct', 'ProductController@register');

Route::get('/addproduct', function(){
    return view('adminpanel.addproduct');
});

Route::get('/showproduct', 'ProductController@show');