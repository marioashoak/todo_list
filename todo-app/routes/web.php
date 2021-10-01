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

Route::get('todos/','TodosController@index')->name('todos.index');

Route::get('todos/create','TodosController@create')->name('todos.create');

Route::get('todos/{todo}','TodosController@show')->name('todos.show');

Route::post('todos/store','TodosController@store')->name('todos.store');

Route::get('todos/{todo}/edit','TodosController@edit')->name('todos.edit');

Route::put('todos/{todo}/update','TodosController@update')->name('todos.update');

Route::delete('todos/{todo}/delete','TodosController@delete')->name('todos.delete');

Route::get('todos/{todo}/complete','TodosController@complete')->name('todos.complete');
