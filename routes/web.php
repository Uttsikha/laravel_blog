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
Route::get('/blogs','BlogsController@index');
Route::get('/blogs/create','BlogsController@create');
Route::delete('/blogs/{blog}/delete','BlogsController@delete');
Route::get('/blogs/{blog}','BlogsController@read');
Route::patch('/blogs/{blog}','BlogsController@update');
Route::get('/blogs/{blog}/edit','BlogsController@edit');
Route::post('/blogs','BlogsController@store');

