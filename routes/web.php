<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/keranjang', 'App\Http\Controllers\HomeController@keranjang');

Route::controller(AuthController::class)->group(function () {

    Route::middleware('guest')->group(function () {
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
Route::get('/kms', 'App\Http\Controllers\HomeController@kms');
Route::get('/kms_show', 'App\Http\Controllers\HomeController@kms_show');
Route::get('/wishlist', 'App\Http\Controllers\HomeController@wishlist');
