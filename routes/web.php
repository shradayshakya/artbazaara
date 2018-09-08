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

Route::get('/aboutus','AboutusController@view');
Route::get('/result','ResultController@view');
Route::get('/product/{product}', 'ProductController@view');

Route::get('/login', 'SessionsController@view');
Route::post('/login','SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');

Route::get('/signup', 'RegistrationController@view');
Route::post('/signup', 'RegistrationController@store');

Route::get('/order/{id}', 'OrderController@placeorder');


//admin panel routes

Route::get('/adminpanel', 'AdminpanelController@view');

Route::get('/adminpanel/addproduct','AdminpanelController@viewAddProduct');
Route::get('/adminpanel/showproduct', 'AdminpanelController@viewShowProduct');
Route::get('/adminpanel/showpurchase', 'AdminpanelController@viewShowPurchase');
Route::post('/adminpanel/addproduct', 'ProductController@register');

Route::get('/adminpanel/addcategory', 'AdminpanelController@viewAddCategory');
Route::get('/adminpanel/showcategory','AdminpanelController@viewShowCategory');
Route::post('/adminpanel/addcategory','CategoryController@register');
