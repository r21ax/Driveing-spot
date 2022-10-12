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


Route::get('/', 'PostController@index')->middleware('auth');
Route::get('/prefectures/{prefecture}', 'PrefectureController@index');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/{post}', 'PostController@show');
Route::post('/posts', 'PostController@store');
Route::delete('/posts/{post}', 'PostController@delete');

Route::post('posts/{post}/likes', 'LikeController@store')->name('likes');
Route::post('posts/{post}/dislikes', 'LikeController@destroy')->name('dislikes');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

