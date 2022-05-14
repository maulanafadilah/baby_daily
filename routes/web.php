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
    // Route::get('login', 'index')->name('login')->middleware('guest');
    Route::post('auth', 'login')->name('auth');
    // Route::get('logout', 'logout')->name('logout');
});

// Route::middleware(['auth', 'level:admin,kader,pemda,orangtua'])->group(function () {
//     //
// });
Route::get('/kms', 'App\Http\Controllers\HomeController@kms');
Route::get('/kms_show', 'App\Http\Controllers\HomeController@kms_show');
Route::get('/wishlist', 'App\Http\Controllers\HomeController@wishlist');
