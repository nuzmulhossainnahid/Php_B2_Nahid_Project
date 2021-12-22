<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CotactUsController;

Route::get('/',[
    'uses'=>'App\Http\Controllers\HomeController@index',
    'as'=>'home'
]);

Route::get('/product-details',[
    'uses'=>'App\Http\Controllers\HomeController@productdetails',
    'as'=>'product-details'
]);

Route::get('/category-product',[
    'uses'=>'App\Http\Controllers\HomeController@category',
    'as'=>'category'
]);

Route::get('/checkout',[
    'uses'=>'App\Http\Controllers\HomeController@checkout',
    'as'=>'checkout'
]);

Route::get('/cart',[
    'uses'=>'App\Http\Controllers\HomeController@cart',
    'as'=>'cart'
]);

Route::get('/login',[
    'uses'=>'App\Http\Controllers\HomeController@login',
    'as'=>'login'
]);

Route::get('/blog',[
    'uses'=>'App\Http\Controllers\HomeController@blog',
    'as'=>'blog'
]);
Route::get('/blogSingle',[
    'uses'=>'App\Http\Controllers\HomeController@blogSingle',
    'as'=>'blogSingle'
]);
Route::get('/contactUs',[
    'uses'=>'App\Http\Controllers\HomeController@contactUs',
    'as'=>'contactUs'
]);
Route::get('/not404',[
    'uses'=>'App\Http\Controllers\HomeController@not404',
    'as'=>'not404'
]);

Route::get('/add-blog',[
    'uses'=>'App\Http\Controllers\BlogController@index',
    'as'=>'add-blog'
]);


Route::post('/new-blog',[
    'uses'=>'App\Http\Controllers\BlogController@create',
    'as'=>'new-blog'
]);

Route::post('/contact',[
    'uses'=>'App\Http\Controllers\CotactUsController@contact',
    'as'=>'contact'
]);

Route::get('/manage-blog',[
    'uses'=>'App\Http\Controllers\BlogController@manage',
    'as'=>'manage-blog'
]);


Route::get('/edit-blog/{id}',[
    'uses'=>'App\Http\Controllers\BlogController@edit',
    'as'=>'edit-blog'
]);