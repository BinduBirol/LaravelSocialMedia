<?php

Route::get('/', function () {
    return view('welcome');
});
Route::post('/signUp', ['uses' => 'UserController@postSignUp', 'as' => 'signUp']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/adminPanel',['uses'=>'UserController@getAdmin', 'as'=>'admin']);

Route::get('/signIn',['uses'=>'UserController@getSingIn', 'as'=>'singnIn']);
