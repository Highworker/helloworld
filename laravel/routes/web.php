<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products', 'ProductController@list')->name('products.list');
Route::get('/products/customSeed', 'ProductController@customSeed')->name('products.customSeed');
Route::get('/products/clear', 'ProductController@clear')->name('products.clear');
Route::get('/products/delete/{id}', 'ProductController@delete')->name('products.delete');
Route::match(['get', 'post'], '/products/edit/{id}', 'ProductController@edit')->name('products.edit');
Route::post('/products/create', 'ProductController@create')->name('products.create');
