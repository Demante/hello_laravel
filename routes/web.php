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

Route::get('/','StaticPagesController@home')->name('home');
Route::get('/help','StaticPagesController@help')->name('help');
Route::get('/about','StaticPagesController@about')->name('about');

// signup
Route::get('/signup','UsersController@create')->name('signup');
Route::resource('users', 'UsersController');
Route::get('/users/{user}', 'UsersController@show')->name('users.show');

// login
Route::get('login', 'SessionsController@create')->name('login');  //登录
Route::post('login', 'SessionsController@store')->name('login');  //创建新的会话
Route::delete('login', 'SessionsController@destroy')->name('login');  //销毁会话
// Route::get('/', function () {
//     return view('welcome');
// });
