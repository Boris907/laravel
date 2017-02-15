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
    return redirect('posts');
    //return view('welcome');
});
//
Route::get('contacts','ContactsController@index');
Route::get('contacts/test','ContactsController@test');
Route::get('about-us','PagesController@aboutUs');

Route::get('tasks','TaskController@index');
Route::get('tasks/addTask','TaskController@addTask');
Route::get('tasks/{id}','TaskController@showTask');

Route::get('/posts', 'PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts','PostsController@store');
Route::get('/posts/{post}','PostsController@show');
Route::delete('/posts/{post}','PostsController@destroy');

Route::post('/posts/{post}/comments','CommentsController@store');

Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');

Route::get('/login','SessionController@create');
Route::post('/login','SessionController@store');
Route::get('/logout','SessionController@destroy');

//GET    /book            - get all books
//GET    /book/3/page/25  - get book 3
//PUT    /book            - create
//POST   /book/1          - change book
//DELETE /book/3