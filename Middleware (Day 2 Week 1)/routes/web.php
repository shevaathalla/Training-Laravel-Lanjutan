<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('adminMiddleware')->group(function () {
    Route::get('/user', 'HomeController@index')->name('user');
    Route::get('/admin', 'HomeController@admin')->name('admin');
    Route::get('/superadmin', 'HomeController@superAdmin')->name('superadmin');
});
