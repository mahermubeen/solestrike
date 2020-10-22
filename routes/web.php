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
    
    Route::get('/shop', 'HomeController@shop')->name('shop');
    Route::get('/order', 'HomeController@order')->name('order');
});

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'middleware' => ['admin']
], function () {
    Route::get('/', 'HomeController@index')->name('admin');

    Route::get('/profileEdit', 'HomeController@profile')->name('profile');
    Route::get('/userIndex', 'HomeController@users')->name('users');
    Route::get('/icons', 'HomeController@icons')->name('icons');
    Route::get('/notifications', 'HomeController@notifications')->name('notifications');
    Route::get('/table_list', 'HomeController@table_list')->name('table_list');
    Route::get('/products', 'HomeController@products')->name('products');
    Route::get('/orders', 'HomeController@orders')->name('orders');
});