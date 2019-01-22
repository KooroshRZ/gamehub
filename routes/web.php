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
Route::post('/users/{id}/edit', 'UsersController@update')->middleware('auth');

Route::post('/users/comments/{id}', 'UsersController@addComment')->middleware('auth');
Route::post('/games/comments/{id}', 'GamesController@addComment')->middleware('auth');

Route::get('/verify_games_comments/', 'CommentsController@indexGamesComments')->middleware('auth');
Route::get('/verify_users_comments/', 'CommentsController@indexUsersComments')->middleware('auth');


Route::post('/verify_users_comments/{id}/accept', 'CommentsController@acceptUserComment')->middleware('auth');
Route::post('/verify_users_comments/{id}/decline', 'CommentsController@declineUserComment')->middleware('auth');

Route::post('/verify_games_comments/{id}/accept', 'CommentsController@acceptGameComment')->middleware('auth');
Route::post('/verify_games_comments/{id}/decline', 'CommentsController@declineGameComment')->middleware('auth');
