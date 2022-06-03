<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Controllers\Parent\ProductController;
use App\Http\Controllers\Parent\SellerController;
use App\Http\Controllers\Parent\WishlistController;
use App\Http\Controllers\Parent\AccountController;
use App\Http\Controllers\Parent\ProfileController;
use App\Http\Controllers\Parent\CategoryController;
use App\Http\Controllers\Parent\CartController;

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

// Authentication
Route::get('/register', 'App\Http\Controllers\Parent\RegisterController@index')->middleware('guest');
Route::post('/register', 'App\Http\Controllers\Parent\RegisterController@store');

Route::get('/login', 'App\Http\Controllers\Parent\LoginController@index')->name('login')->middleware('guest');
Route::post('/login', 'App\Http\Controllers\Parent\LoginController@authenticate');

Route::get('/logout', 'App\Http\Controllers\Parent\LoginController@logout');
Route::post('/logout', 'App\Http\Controllers\Parent\LoginController@logout');

Route::get('/rolehandler', 'App\Http\Controllers\HomeController@rolehandler');

// Home
Route::get('/', 'App\Http\Controllers\HomeController@index');

// Mitra
Route::get('/mitra/ppkm', 'App\Http\Controllers\Parent\MitraController@index');
Route::get('/mitra/ppkm/umkm', 'App\Http\Controllers\parent\MitraController@mitra_umkm');

// Store
Route::resource('/store', SellerController::class);

// Product
Route::resource('/product', ProductController::class);

// Wishlist
Route::resource('/wishlist', WishlistController::class)->middleware('auth');

// Account
Route::resource('/account', AccountController::class)->middleware('auth');

// Profile
Route::resource('/profile', ProfileController::class)->middleware('auth');

// Category
Route::resource('/category', CategoryController::class);

// Cart
Route::resource('/cart', CartController::class);

Route::get('/kms', 'App\Http\Controllers\HomeController@kms');
Route::get('/kms_show', 'App\Http\Controllers\HomeController@kms_show');
Route::get('/discovery', 'App\Http\Controllers\HomeController@discovery');
Route::get('/promotion', 'App\Http\Controllers\HomeController@promotion');
Route::get('/information', 'App\Http\Controllers\HomeController@information');
Route::get('/brand', 'App\Http\Controllers\HomeController@brand');


Route::get('/keranjang', 'App\Http\Controllers\HomeController@keranjang');
