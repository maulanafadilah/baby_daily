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
// Route::get('/register', 'App\Http\Controllers\Parent\RegisterController@index')->middleware('guest');
// Route::post('/register', 'App\Http\Controllers\Parent\RegisterController@store');

// Route::get('/login', 'App\Http\Controllers\Parent\LoginController@index')->name('login')->middleware('guest');
// Route::post('/login', 'App\Http\Controllers\Parent\LoginController@authenticate');

// Route::get('/logout', 'App\Http\Controllers\Parent\LoginController@logout');
// Route::post('/logout', 'App\Http\Controllers\Parent\LoginController@logout');

// Route::get('/rolehandler', 'App\Http\Controllers\HomeController@rolehandler');

// Home

Route::controller(AuthController::class)->group(function () {
    
    Route::middleware('guest')->group(function () {
        Route::get('/', 'App\Http\Controllers\HomeController@index');
        Route::get('login', 'index')->name('login');
        Route::get('register', 'register')->name('register');
        Route::get('reset', 'reset')->name('reset');
        Route::post('resetpassword', 'reset_password')->name('reset_password');
    });

    Route::middleware('auth')->group(function () {
        Route::get('edit_profile', 'edit_profile')->name('edit_profile');
        Route::put('update_profile', 'update_profile')->name('update_profile');
        Route::put('update_pertanyaan', 'update_pertanyaan')->name('update_pertanyaan');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/home', 'App\Http\Controllers\HomeController@user')->name('home')->middleware('question');

    Route::get('/question', 'App\Http\Controllers\AuthController@question')->name('question');

    Route::post('/store_question', 'App\Http\Controllers\AuthController@store')->name('store_question');

    Route::middleware('admin')->group(function () {
        // 
    });

    Route::middleware('user')->group(function () {
        // 
    });

    Route::middleware('seller')->group(function () {
        // 
    });
});



// Route::get('/kms', 'App\Http\Controllers\HomeController@kms');
// Route::get('/kms_show', 'App\Http\Controllers\HomeController@kms_show');
// Route::get('/discovery', 'App\Http\Controllers\HomeController@discovery');
// Route::get('/promotion', 'App\Http\Controllers\HomeController@promotion');
// Route::get('/information', 'App\Http\Controllers\HomeController@information');
// Route::get('/brand', 'App\Http\Controllers\HomeController@brand');
// Route::get('/keranjang', 'App\Http\Controllers\HomeController@keranjang');
