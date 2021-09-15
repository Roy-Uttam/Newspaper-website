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

Route::get('/pages', function () {
    return view('pages');
});

Route::get('/news_details', function () {
    return view('news_details');
});

Route::get('/account', function () {
    return view('account');
})->name('accounts');

Route::get('/', '\App\Http\Controllers\NewsController@worldNews');

Route::resource('/users', \App\Http\Controllers\UserController::class);

Route::resource('/news', \App\Http\Controllers\NewsController::class);

Route::get('/admin_news', '\App\Http\Controllers\NewsController@addNews')->middleware('auth');