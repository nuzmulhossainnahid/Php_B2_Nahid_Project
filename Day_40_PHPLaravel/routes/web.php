<?php

use Illuminate\Support\Facades\Route;

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


//Route::get('/bitm', [
//    'uses'=>'App\Http\Controllers\TestController@index',
//    'as'=>'bitm'
//]);
//
//Route::get('/allcatagary', [
//    'uses'=>'App\Http\Controllers\calageryController@catagary',
//    'as'=>'all'
//]);
//Route::get('/basis/seip',[
//    'uses'=>'App\Http\Controllers\TestController@seip',
//    'as'=>'seip'
//]);
