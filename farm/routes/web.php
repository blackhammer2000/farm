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

Route::get('/', function () {
    return view('login.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('home.about');

Route::get('/service', [App\Http\Controllers\HomeController::class, 'service'])->name('home.service');

Route::get('/product', [App\Http\Controllers\HomeController::class, 'product'])->name('home.product');

Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('home.contact');
// Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('home.about');
