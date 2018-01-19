<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', 'ArticleController@index');
Route::post('/uploadFile', 'UploadsController@uploadImg');
Route::resource('/article', 'ArticleController');

Route::post('/favorite/{post}', 'ArticleController@favoritePost');
Route::post('/unfavorite/{post}', 'ArticleController@unFavoritePost');
Route::get('/my_favorites', 'UsersController@myFavorites')->middleware('auth');