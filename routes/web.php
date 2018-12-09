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

Route::prefix('/adminpanel')->group(function(){

    Route::get('/login','Auth\AdminLoginController@showLoginForm');
    Route::post('/login','Auth\AdminLoginController@login');
    Route::get('/logout','Auth\LoginController@logout');

    Route::get('/', 'AdminpanelController@view');
    
    Route::get('/addproduct','AdminpanelController@viewAddProduct');
    Route::get('/showproduct', 'AdminpanelController@viewShowProduct');
    Route::post('/addproduct', 'AdminpanelController@productRegister');
    
    Route::get('/addcategory', 'AdminpanelController@viewAddCategory');
    Route::get('/showcategory','AdminpanelController@viewShowCategory');
    Route::post('/addcategory','AdminpanelController@categoryRegister');
    
    Route::get('/showorder','AdminpanelController@viewShowOrder');
    Route::get('/showorder/confirm/{id}','AdminpanelController@orderConfirm');
    Route::get('/showorder/decline/{id}','AdminpanelController@orderDecline');
    
    Route::get('/showdeliver','AdminpanelController@viewShowDeliver');
    Route::get('/showdeliver/confirm/{id}','DeliveryController@confirm');
    Route::get('/showdeliver/decline/{id}','DeliveryController@decline');
    
    Route::get('/showsales','AdminpanelController@viewShowSales');
    Route::get('/showpurchase', 'AdminpanelController@viewShowPurchase');
    Route::get('/showusers', 'AdminpanelController@viewShowUsers');
    Route::get('/showcarousel', 'AdminpanelController@viewCarousel');
    Route::post('/showcarousel/{id}', 'CarouselController@update');
});
Auth::routes();