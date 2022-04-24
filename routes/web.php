<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\NewspaperController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SettingController;
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

require __DIR__ . '/auth.php';




Route::get('/', [NewsController::class, 'allNews']);

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
    Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::post('category/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('category/update', [CategoryController::class, 'update'])->name('category.update');
    Route::post('category/delete', [CategoryController::class, 'destroy'])->name('category.delete');


    Route::get('/items', [NewspaperController::class, 'index'])->name('items');
    Route::post('/item/store', [NewspaperController::class, 'store'])->name('item.store');
    Route::post('/item/edit', [NewspaperController::class, 'edit'])->name('item.edit');
    Route::post('/item/update', [NewspaperController::class, 'update'])->name('item.update');
    Route::post('/item/delete', [NewspaperController::class, 'destroy'])->name('item.delete');

    Route::get('/settings', [SettingController::class, 'index'])->name('settings');
    Route::get('/setSetting', [SettingController::class, 'settings'])->name('settings.set');
});


Route::get('/news_details', function () {
    return view('admin.news_details');
});


Route::get('/admin/news/{id}', [NewsController::class, 'news_details'])->name('news.details');
Route::get('/category/{id}/news', [CategoryController::class, 'CatNews']);



Route::get('summernoteeditor', '\App\Http\Controllers\SummernotefileController@getSummernoteeditor')->name('summernoteeditor.get');
Route::post('summernoteeditor', '\App\Http\Controllers\SummernotefileController@postSummernoteeditor')->name('summernoteeditor.post');
