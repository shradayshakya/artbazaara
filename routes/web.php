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

Route::get('/','IndexController@view');
Route::get('/aboutus','AboutusController@view');
Route::get('/result','ResultController@view');
Route::get('/signup', 'SignupController@view');
Route::get('/product/{product}', 'ProductController@view');
Route::get('/login',function(){
    $categories =\App\Category::get();
    return view('login',compact('categories'));
});

//admin panel routes

Route::get('/adminpanel', 'AdminpanelController@view');

Route::get('/adminpanel/addproduct','AdminpanelController@viewAddProduct');
Route::get('/adminpanel/showproduct', 'AdminpanelController@viewShowProduct');
Route::get('/adminpanel/showpurchase', 'AdminpanelController@viewShowPurchase');
Route::post('/adminpanel/addproduct', 'ProductController@register');

Route::get('/adminpanel/addcategory', 'AdminpanelController@viewAddCategory');
Route::get('/adminpanel/showcategory','AdminpanelController@viewShowCategory');
Route::post('/adminpanel/addcategory','CategoryController@register');
