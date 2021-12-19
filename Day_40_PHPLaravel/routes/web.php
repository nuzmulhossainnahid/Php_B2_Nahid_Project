<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[
    'uses'=>'App\Http\Controllers\HomeController@index',
    'as'=>'home'
]);
Route::get('/about-us',[
    'uses'=>'App\Http\Controllers\HomeController@about',
    'as'=>'about-us'
]);

Route::get('/register-now',[
    'uses'=>'App\Http\Controllers\HomeController@registation',
    'as'=>'register-now'
]);
Route::post('/register',[
    'uses'=>'App\Http\Controllers\HomeController@newrestater',
    'as'=>'register-form'
]);

//class 42
Route::post('/result',[
    'uses'=>'App\Http\Controllers\HomeController@result',
    'as'=>'result'
]);

Route::get('/count',[
    'uses'=>'App\Http\Controllers\HomeController@count',
    'as'=>'count'
]);
Route::post('/count',[
    'uses'=>'App\Http\Controllers\HomeController@countResult',
    'as'=>'count'
]);


