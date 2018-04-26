<?php

Route::get('/', function () {
    return view('welcome');
});
Route::post('/signUp', ['uses' => 'UserController@postSignUp', 'as' => 'signUp']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
