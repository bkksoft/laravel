<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('dashboard.ecommerce');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/store', 'StoreController@index')->name('store');

Route::get('/blogs', 'BlogController@index')->name('blog');
