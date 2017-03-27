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

Route::get('/', [
		'uses' => 'BlogController@index',
		'as' => 'blog'
	]);
Route::get('/user/{user}', [
		'uses' => 'BlogController@login',
		'as' => 'blog.login'
	]);

Route::get('/blog/{post}', [

		'uses' => 'BlogController@show',
		'as' => 'blog.show'
	]);

Route::get('/category/{category}', [
		'uses' => 'BlogController@category',
		'as' => 'category'
	]);

Route::get('/login', [
		'uses' => 'LoginController@index',
		'as' => 'login'
	]);

Route::post('/login', [
		'uses' => 'LoginController@signIn',
		'as' => 'signin'
	]);

Route::get('/register', [
		'uses' => 'RegisterController@index',
		'as' => 'register'
	]);
Route::post('/register', [
		'uses' => 'RegisterController@create',
		'as' => 'create_user'
	]);