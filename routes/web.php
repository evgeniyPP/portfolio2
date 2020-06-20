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
    Route::view('/', 'admin')->name('admin');

    Route::group(['prefix' => 'edit'], function () {
        Route::view('/', 'admin.edit')->name('admin.edit');

        Route::view('/main', 'admin.edit.main')->name('admin.edit.main');
        Route::view('/project', 'admin.edit.project')->name('admin.edit.project');
        Route::view('/link', 'admin.edit.link')->name('admin.edit.link');
        Route::view('/skill', 'admin.edit.skill')->name('admin.edit.skill');
        Route::view('/contact', 'admin.edit.contact')->name('admin.edit.contact');
    });

    Route::group(['prefix' => 'add'], function () {
        Route::view('/', 'admin.add')->name('admin.add');

        Route::view('/project', 'admin.add.project')->name('admin.add.project');
        Route::view('/link', 'admin.add.link')->name('admin.add.link');
        Route::view('/skill', 'admin.add.skill')->name('admin.add.skill');
        Route::view('/contact', 'admin.add.contact')->name('admin.add.contact');
    });
});
