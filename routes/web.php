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
Route::get('board', 'BoardController@index');
Route::get('board/add', 'BoardController@add');
Route::post('board/add', 'BoardController@create');

Route::get('person', 'PersonController@index');
Route::get('person/find', 'PersonController@find');
Route::post('person/find', 'PersonController@search');
Route::get('person/add', 'PersonController@add');
Route::post('person/add', 'PersonController@create');
Route::get('person/edit', 'PersonController@edit');
Route::post('person/edit', 'PersonController@update');
Route::get('person/del', 'PersonController@delete');
Route::post('person/del', 'PersonController@remove');
Route::get('practice', 'PracticeController@index');
Route::post('practice', 'PracticeController@post');
Route::get('practice/show', 'PracticeController@show');
Route::get('practice/add', 'PracticeController@add');
Route::post('practice/add', 'PracticeController@create');
Route::get('practice/edit', 'PracticeController@edit');
Route::post('practice/edit', 'PracticeController@update');
Route::get('practice/del', 'PracticeController@del');
Route::post('practice/del', 'PracticeController@remove');

Route::resource('rest', 'RestappController');
Route::get('practice/rest', 'PracticeController@rest');