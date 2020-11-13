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


Route::get('/', 'HomeController@index');


Route::group([
    'prefix' => 'user',
    'namespace' => 'User',
    'middleware' => ['auth']
], function () {
    Route::get('/', 'HomeController@index')->name('user');
    Route::get('/shop', 'ShopController@index')->name('shop');
    
    Route::get('/order_product/{id}', 'OrderController@order_product')->name('order_product');
    Route::get('/cart', 'OrderController@cart')->name('cart');

});

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'middleware' => ['admin']
], function () {
    Route::get('/', 'HomeController@index')->name('admin');

    Route::get('/orders', 'HomeController@orders')->name('orders');

    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::post('/change-password', 'ProfileController@updatePassword')->name('change_password');
    Route::post('/change-name', 'ProfileController@updateName')->name('change_name');
    Route::get('/users', 'ProfileController@users')->name('users');
    Route::put('/updateStatus/{id}', 'ProfileController@updateStatus');
    Route::post('/users/show_user/{id}', 'ProfileController@show_user')->name('show_user');
    Route::post('/users/edit_user/{id}', 'ProfileController@edit_user')->name('edit_user');
    Route::post('/users/delete_user/{id}', 'ProfileController@delete_user')->name('delete_user');
    Route::post('/users/add_user', 'ProfileController@add_user')->name('add_user');


    // Route::get('/icons', 'HomeController@icons')->name('icons');
    // Route::get('/notifications', 'HomeController@notifications')->name('notifications');
    // Route::get('/table_list', 'HomeController@table_list')->name('table_list');

    Route::get('/products', 'ProductController@index')->name('products');
    Route::post('/products/add_product', 'ProductController@add_product')->name('add_product');
    Route::post('/products/show_product/{id}', 'ProductController@show_product')->name('show_product');
    Route::post('/products/edit_product/{id}', 'ProductController@edit_product')->name('edit_product');
    Route::post('/products/delete_product/{id}', 'ProductController@delete_product')->name('delete_product');
});