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
Route::get('practice', 'PracticeController@index');
Route::post('practice', 'PracticeController@post');
Route::get('practice/show', 'PracticeController@show');
Route::get('practice/add', 'PracticeController@add');
Route::post('practice/add', 'PracticeController@create');
Route::get('practice/edit', 'PracticeController@edit');
Route::post('practice/edit', 'PracticeController@update');
Route::get('practice/del', 'PracticeController@del');
Route::post('practice/del', 'PracticeController@remove');
