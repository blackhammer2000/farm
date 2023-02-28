<?php

use App\Http\Controllers\animalController;
use App\Http\Controllers\cropController;
use App\Http\Controllers\optionsController;
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

Route::post('/option', [optionsController::class, 'chooseOption']) -> name('');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']) -> name('home.index');

Route::get('/about', [App\Http\Controllers\HomeController::class, 'about']) -> name('home.about');

Route::get('/service', [App\Http\Controllers\HomeController::class, 'service']) -> name('home.service');

Route::get('/product', [App\Http\Controllers\HomeController::class, 'product']) -> name('home.product');

Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact']) -> name('home.contact');

Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog']) -> name('home.blog');

Route::get('/blog/detail', [App\Http\Controllers\HomeController::class, 'detail']) -> name('home.detail');

Route::get('/features', [App\Http\Controllers\HomeController::class, 'features']) -> name('home.features');

Route::get('/team', [App\Http\Controllers\HomeController::class, 'team']) -> name('home.team');

Route::get('/testimonial', [App\Http\Controllers\HomeController::class, 'testimonial']) -> name('home.testimonial');


//////////////////////////////////////////////

Route::get('/admin', [App\Http\Controllers\adminController::class, 'index']) -> name('admin.index');

// Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout']) -> name('home.index');

//options

Route::post('/options', [optionsController::class, 'chooseOption']) -> name('options');

Route::get('/options/flora/index', [cropController::class, 'index']) -> name('flora.index');

Route::get('/options/fauna/index', [animalController::class, 'index']) -> name('fauna.index');
