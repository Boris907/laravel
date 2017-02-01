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

Route::get('contacts','ContactsController@index');
Route::get('contacts/test','ContactsController@test');
Route::get('about-us','PagesController@aboutUs');

Route::get('tasks','TaskController@index');
Route::get('tasks/addTask','TaskController@addTask');
Route::get('tasks/{id}','TaskController@showTask');
