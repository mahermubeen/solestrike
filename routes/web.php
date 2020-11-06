<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();


Route::get('/', function () {
    return view('home');
});


Route::group([
    'prefix' => 'user',
    'namespace' => 'User',
    'middleware' => ['auth']
], function () {
    Route::get('/', 'HomeController@index')->name('user');
    
    Route::get('/shop', 'ShopController@index')->name('shop');
    Route::get('/order', 'OrderController@index')->name('order');
});

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'middleware' => ['admin']
], function () {
    Route::get('/', 'HomeController@index')->name('admin');

    Route::get('/profileEdit', 'ProfileController@index')->name('profile');
    Route::post('/change-password', 'ProfileController@updatePassword')->name('change_password');
    Route::post('/change-name', 'ProfileController@updateName')->name('change_name');
    Route::get('/userIndex', 'ProfileController@users')->name('users');
    Route::post('/updateStatus/{id}', 'ProfileController@updateStatus');

    Route::get('/icons', 'HomeController@icons')->name('icons');
    Route::get('/notifications', 'HomeController@notifications')->name('notifications');
    Route::get('/table_list', 'HomeController@table_list')->name('table_list');

    Route::get('/products', 'ProductController@index')->name('products');
    Route::post('/products/add_product', 'ProductController@add_product')->name('add_product');
    Route::get('/products/show_product/{id}', 'ProductController@show_product')->name('show_product');
    Route::post('/products/edit_product/{id}', 'ProductController@edit_product')->name('edit_product');

    Route::get('/orders', 'HomeController@orders')->name('orders');
});