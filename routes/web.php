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


Route::get('/', 'PageController@index');

Route::get('duane', function () {
	return view('duane');
});

Auth::routes();

Route::get('/u/home', 'HomeController@index');
