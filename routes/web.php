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


Route::get('/todos', [
	'uses' => 'TodosController@index',
	'as' => 'todos'
]);

Route::post('/store', [
	'uses' => 'TodosController@store',
	'as' => 'todo.store',
]);

Route::get('/delete/{id}', [
	'uses' => 'TodosController@delete',
	'as' => 'todo.delete',
]);

Route::get('/update/{id}', [
	'uses' => 'TodosController@update',
	'as' => 'todo.update',
]);

Route::post('/save/{id}', [
	'uses' => 'TodosController@save',
	'as' => 'todo.save',
]);

Route::get('/complete/{id}', [
	'uses' => 'TodosController@complete',
	'as' => 'todo.complete',
]);
