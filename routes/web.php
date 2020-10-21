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


// Route::get('/shop', function () {
//     return view('shop');
// });

// Route::get('/order', function () {
//     return view('order');
// });

// Route::get('/admin', function () {
//     return view('layouts/main');
// });


// Route::get('/shop', function () {
//     return view('shop');
// })->name('shop');

// Route::get('/order', function () {
//     return view('order');
// })->name('order');


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
});


    // Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class, 'admin'])->name('admin');

    // Route::get('/admin/profile', [App\Http\Controllers\Admin\HomeController::class, 'profileEdit'])->name('profileEdit');
    // Route::get('/admin/users', [App\Http\Controllers\Admin\HomeController::class, 'userIndex'])->name('userIndex');
    
    // Route::get('/admin/icons', [App\Http\Controllers\Admin\Admin\HomeController::class, 'icons'])->name('icons');
    // Route::get('/admin/notifications', [App\Http\Controllers\Admin\HomeController::class, 'notifications'])->name('notifications');
    // Route::get('/admin/table_list', [App\Http\Controllers\Admin\HomeController::class, 'table_list'])->name('table_list');