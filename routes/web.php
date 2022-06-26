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

Route::get('/', 'DefectController@index')->name('defect.index');
Route::get('/orders', 'OrderController@index')->name('order.index');

Route::group(['namespace' => 'Catalog'], function () {
    Route::group(['prefix' => 'auto_brands'], function () {
        Route::get('/', 'AutoBrandController@index')->name('auto_brand.index');
        Route::get('/create', 'AutoBrandController@create')->name('auto_brand.create');
        Route::post('/', 'AutoBrandController@store')->name('auto_brand.store');
        Route::get('/{auto_brand}/edit', 'AutoBrandController@edit')->name('auto_brand.edit');
        Route::patch('/{auto_brand}', 'AutoBrandController@update')->name('auto_brand.update');
        Route::delete('/{auto_brand}', 'AutoBrandController@destroy')->name('auto_brand.delete');
    });

    Route::group(['prefix' => 'auto'], function () {
        Route::get('/', 'AutoController@index')->name('auto.index');
        Route::get('/create', 'AutoController@create')->name('auto.create');
        Route::post('/', 'AutoController@store')->name('auto.store');
        Route::get('/{auto}/edit', 'AutoController@edit')->name('auto.edit');
        Route::patch('/{auto}', 'AutoController@update')->name('auto.update');
        Route::delete('/{auto}', 'AutoController@destroy')->name('auto.delete');
    });

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
