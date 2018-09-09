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

Route::get('/home','IndexController@view');
Route::get('/','IndexController@view');

Route::post('/result','ResultController@view');
Route::get('/category/{id}','CategoryController@view');


Route::get('/product/{product}', 'ProductController@view');

Route::get('/login', 'SessionsController@view');
Route::get('/login/{id}', 'SessionsController@viewWithProductId');

Route::post('/login','SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');

Route::get('/signup', 'RegistrationController@view');
Route::post('/signup', 'RegistrationController@store');

Route::get('/order/{id}', 'OrderController@placeorder');


//admin panel routes

Route::get('/adminpanel', 'AdminpanelController@view');

Route::get('/adminpanel/addproduct','AdminpanelController@viewAddProduct');
Route::get('/adminpanel/showproduct', 'AdminpanelController@viewShowProduct');
Route::post('/adminpanel/addproduct', 'ProductController@register');

Route::get('/adminpanel/addcategory', 'AdminpanelController@viewAddCategory');
Route::get('/adminpanel/showcategory','AdminpanelController@viewShowCategory');
Route::post('/adminpanel/addcategory','CategoryController@register');

Route::get('/adminpanel/showorder','AdminpanelController@viewShowOrder');
Route::get('/adminpanel/showorder/confirm/{id}','OrderController@confirm');
Route::get('/adminpanel/showorder/decline/{id}','OrderController@decline');

Route::get('/adminpanel/showdeliver','AdminpanelController@viewShowDeliver');
Route::get('/adminpanel/showdeliver/confirm/{id}','DeliveryController@confirm');
Route::get('/adminpanel/showdeliver/decline/{id}','DeliveryController@decline');

Route::get('/adminpanel/showsales','AdminpanelController@viewShowSales');
Route::get('/adminpanel/showpurchase', 'AdminpanelController@viewShowPurchase');
