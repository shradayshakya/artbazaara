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

Route::get('/product/{product}', 'ProductController@display');

Route::get('/result','ResultController@view');

Route::get('/signup', 'SignupController@view');

Route::get('/login',function(){
    return view('login');
});

//admin panel routes

Route::get('/adminpanel', 'AdminpanelController@view');

Route::get('/adminpanel/addproduct','AdminpanelController@viewAddProduct');
Route::get('/adminpanel/showproduct', 'AdminpanelController@viewShowProduct');
Route::post('/adminpanel/addproduct', 'ProductController@register');

Route::get('/adminpanel/addcategory', 'AdminpanelController@viewAddCategory');
Route::get('/adminpanel/showcategory','AdminpanelController@viewShowCategory');
Route::post('/adminpanel/addcategory','CategoryController@register');
