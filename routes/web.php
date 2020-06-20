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

Route::view('/', 'index')->name('index');

Route::group(['prefix' => 'admin'], function () {
    Route::view('/', 'admin.index')->name('admin');
    Route::view('/edit', 'admin.edit')->name('admin.edit');
    Route::view('/add', 'admin.add')->name('admin.add');
});
