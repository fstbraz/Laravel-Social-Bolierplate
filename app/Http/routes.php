<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::get('/', function () {
	return view('welcome');
});

Route::auth();

Route::get('user/activation/{token}', 'Auth\AuthController@activateUser')->name('user.activate');

Route::get('/dashboard', [
	'uses' => 'DashController@getDashboard',
	'as' => 'dashboard',
	'middleware' => 'auth',
]);

Route::get('/account', [
	'uses' => 'UserController@getAccount',
	'as' => 'account',
	'middleware' => 'auth',
]);

Route::post('/upateaccount', [
	'uses' => 'UserController@postSaveAccount',
	'as' => 'account.save',
	'middleware' => 'auth',
]);

Route::get('/userimage/{filename}', [
	'uses' => 'UserController@getUserImage',
	'as' => 'account.image',
	'middleware' => 'auth',
]);

Route::post('/createpost', [
	'uses' => 'PostController@postCreatePost',
	'as' => 'post.create',
	'middleware' => 'auth',
]);

Route::get('/delete-post/{post_id}', [
	'uses' => 'PostController@getDeletePost',
	'as' => 'post.delete',
	'middleware' => 'auth',
]);

Route::post('/edit', [
	'uses' => 'PostController@postEditPost',
	'as' => 'edit',
	'middleware' => 'auth',
]);

Route::post('/like', [
	'uses' => 'PostController@postLikePost',
	'as' => 'like',
	'middleware' => 'auth',
]);
