<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'OminoController@index')->name('home');
Route::get('/show/{id}', 'OminoController@show')->name('show');
Route::get('/destroy/{id}', 'OminoController@delete')->name('destroy');
Route::get('/create', 'OminoController@create')->name('create');
Route::post('/store', 'OminoController@store')->name('store');
