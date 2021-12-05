<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
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


Route::get('/news_details', function () {
    return view('admin.news_details');
});

Route::get('/account', function () {
    return view('admin.account');
})->name('accounts');


Route::get('/', [NewsController::class, 'allNews']);

Route::resource('/users', UserController::class);

Route::resource('/admin/news', NewsController::class);


Route::resource('/admin/category', CategoryController::class);



Route::middleware(['auth'])->group(function () {
    
    Route::get('/admin/admin_news', [NewsController::class, 'addNews']);
});

Route::get('/category/{id}/news', [CategoryController::class, 'CatNews']);
Route::resource('/admin/setting', SettingController::class);

Route::get('/admin/news/edit/{id}', [NewsController::class, 'editPost'])->name('admin.post.edit');
Route::post('/admin/news/update/{id}', [NewsController::class, 'updatestore'])->name('admin.update.store');

Route::get('/admin/settings', [SettingController::class, 'settings'])->name('admin.settings');


Route::get('summernoteeditor', '\App\Http\Controllers\SummernotefileController@getSummernoteeditor')->name('summernoteeditor.get');
 
 Route::post('summernoteeditor', '\App\Http\Controllers\SummernotefileController@postSummernoteeditor')->name('summernoteeditor.post');
 