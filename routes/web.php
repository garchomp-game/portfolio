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



Auth::routes();

Route::get('/', 'HomeController@index')->name('root_path');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('board', 'BoardController');
Route::resource('chat', 'ChatController');
Route::prefix('{user}')->group(function () {
  Route::resource('user', 'UserController');
  Route::resource('status_sheet', 'StatusShetController');
});
