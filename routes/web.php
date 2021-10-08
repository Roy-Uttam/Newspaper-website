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


Route::get('/', '\App\Http\Controllers\NewsController@allNews');

Route::resource('/users', \App\Http\Controllers\UserController::class);

Route::resource('/admin/news', \App\Http\Controllers\NewsController::class);

Route::resource('/admin/category', \App\Http\Controllers\CategoryController::class);



Route::middleware(['auth'])->group(function () {
    
    Route::get('/admin/admin_news', '\App\Http\Controllers\NewsController@addNews');
    
});

Route::get('/category/{id}/news', '\App\Http\Controllers\CategoryController@CatNews');
Route::resource('/admin/setting', \App\Http\Controllers\settingController::class);

Route::get('/admin/news/edit/{id}', '\App\Http\Controllers\NewsController@editPost')->name('admin.post.edit');
Route::post('/admin/news/update/{id}', '\App\Http\Controllers\NewsController@updatestore')->name('admin.update.store');

// Route::get('/catwise', '\App\Http\Controllers\NewsController@catwise');

// Route::resource('/admin/setting', \App\Http\Controllers\settingController::class);
Route::get('/admin/settings', '\App\Http\Controllers\settingController@settings')->name('admin.settings');
Route::post('/admin/ckeditor', '\App\Http\Controllers\NewsController@imgupload')->name('ckeditor.upload');
