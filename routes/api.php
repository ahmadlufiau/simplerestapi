<?php

use Illuminate\Http\Request;

Route::post('auth/login','AuthController@login');
Route::post('auth/register','AuthController@register');
Route::get('users','UserController@users');
Route::get('users/profile','UserController@profile')->middleware('auth:api');
Route::get('users/{id}','UserController@profileById')->middleware('auth:api');
Route::post('post','PostController@add')->middleware('auth:api');