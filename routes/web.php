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

Route::group(['prefix'=>'board'], function () {
    Route::get('index', 'BoardController@index')->name('board.index');
    Route::get('create', 'BoardController@create')->name('board.create');
    Route::post('store', 'BoardController@store')->name('board.store');
    Route::get('show/{id}', 'BoardController@show')->name('board.show');
    Route::get('edit/{id}', 'BoardController@edit')->name('board.edit');
    Route::post('update/{id}', 'BoardController@update')->name('board.update');
    Route::post('destroy/{id}', 'BoardController@destroy')->name('board.destroy');
    Route::get('search', 'BoardController@search')->name('board.search');
  });

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->middleware(['auth'])->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
