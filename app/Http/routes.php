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

Route::get('login', function() {
	return '<form action="/login" method="post">'.
		   '<label for="email">Email: <input id="email" name="email" type="email"></label> '.
		   '<label for="password">Password: <input id="password" name="password" type="password"></label> '.
		   '<button type="submit">Login</button> '.
		   '<a href="/reset">Reset password</a> '.
		   '<a href="/register">Register</a>'.
		   '</form>';
});

Route::get('profile/{username}', 'ProfileController@show');


Route::get('createGiftNeed', 'GiftNeedController@index')

