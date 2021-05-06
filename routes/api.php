<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/users', 'UserController@index');
// Route::get('/user/create', 'UserController@create');
Route::post('/user/store', 'UserController@store');
Route::get('/user/edit/{id}', 'UserController@edit');
Route::get('/user/show/{id}', 'UserController@show');
Route::put('/user/update/{id}', 'UserController@update');
Route::delete('/user/delete/{id}', 'UserController@destroy');
