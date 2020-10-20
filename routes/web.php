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

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home')

Route::get('/', function () {
    return view('home');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/order', function () {
    return view('order');
});

// Route::get('/admin', function () {
//     return view('layouts/main');
// });

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');

Route::get('/admin/profile', [App\Http\Controllers\HomeController::class, 'profileEdit'])->name('profileEdit');
Route::get('/admin/users', [App\Http\Controllers\HomeController::class, 'userIndex'])->name('userIndex');

Route::get('/admin/icons', [App\Http\Controllers\HomeController::class, 'icons'])->name('icons');
Route::get('/admin/notifications', [App\Http\Controllers\HomeController::class, 'notifications'])->name('notifications');
Route::get('/admin/table_list', [App\Http\Controllers\HomeController::class, 'table_list'])->name('table_list');