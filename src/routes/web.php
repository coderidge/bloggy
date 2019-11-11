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

Auth::routes(['verify' => true]);

Route::resource('blogs','BlogController');

Route::get('blogs/full','BlogController@fullblog');

Route::get('myblogs','BlogController@myblogs');

Route::get('blogs/show','BlogController@show');

Route::post('blogs/edit','BlogController@edit');

Route::post('blogs/destroy','BlogController@destroy');

Route::resource('comments','CommentsController');

Route::get('/', 'BlogController@index');

Route::get('/home', 'BlogController@index');
