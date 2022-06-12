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
use Illuminate\Support\Facades\Auth;

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


/*--------------------------------BOTH LOGGED AND UNLOGGED---------------------------- */

// HOME
Route::get('/', 'App\Http\Controllers\Parent\MitraController@index')->name('home');

Route::get('/umkm', 'App\Http\Controllers\parent\MitraController@mitra_umkm');

// STORE
Route::resource('/store', SellerController::class);

// PRODUCT
Route::resource('/product', ProductController::class);

// CATEGORY
Route::resource('/category', CategoryController::class);



// Route::get('/discovery', 'App\Http\Controllers\HomeController@discovery');
// Route::get('/promotion', 'App\Http\Controllers\HomeController@promotion');
// Route::get('/information', 'App\Http\Controllers\HomeController@information');
// Route::get('/brand', 'App\Http\Controllers\HomeController@brand');

/*------------------------------------------------------------------------------------- */


Route::controller(AuthController::class)->group(function () {
    
    Route::post('resetpassword', 'reset_password')->name('reset_password');
    Route::post('reset-password-log', 'reset_password_log')->name('reset_password_log');
    
    Route::middleware('guest')->group(function () {
        // Auth
        Route::get('login', 'index')->name('login');
        Route::get('register', 'register')->name('register');
        Route::get('reset', 'reset')->name('reset');
    });

    Route::middleware('auth')->group(function () {
        Route::put('update_question', 'update_question')->name('update_question');
    });
});

Route::middleware('auth')->group(function () {

    Route::get('/question', 'App\Http\Controllers\AuthController@question')->name('question');

    Route::post('/store_question', 'App\Http\Controllers\AuthController@store')->name('store_question');

    Route::middleware('user')->group(function () {
        // Wishlist
        Route::resource('/wishlist', WishlistController::class)->middleware('auth');

        // Account
        Route::resource('/account', AccountController::class)->middleware('auth');

        // Profile
        Route::resource('/profile', ProfileController::class)->middleware('auth');
    });
});
