<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;

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
