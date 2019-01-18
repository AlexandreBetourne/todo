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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/task', 'TaskController@index')->name('task.get');

Route::post('/task', 'TaskController@post')->name('task.post');

Route::get('/task/{id}', 'TaskController@delete')->name('task.delete');

Route::get('/home', 'HomeController@index')->name('home');