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

//Route::get('/', 'PagesController@home');

Route::get('logout', 'Auth\LoginController@logout');

Route::get('/games', 'GamesController@index');
Route::get('/games/create', 'GamesController@create');
Route::get('/games/{id}', 'GamesController@show');
Route::post('/games', 'GamesController@store');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/profile', 'UsersController@profile')->middleware('auth');

Route::get('/users', 'UsersController@index');
Route::get('/users/{name}', 'UsersController@show')->middleware('auth');
Route::post('/users/{id}/friend', 'UsersController@addFriend')->middleware('auth');
Route::post('/uses/{id}', 'UsersController@update')->middleware('auth');

Route::post('/users/comments/{id}', 'UsersController@addComment');