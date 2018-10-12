<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('products', 'ProductController@index')->name('index');
Route::get('products/{id}', 'ProductController@show')->name('show');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add-to-cart/{id}', 'ShopController@addToCart')->name('add_cart');
Route::get('/cart','ShopController@showCart')->name('showCart');
Route::get('/delete_cart/{id}', 'ShopController@deleteProductOnCart')->name('deleteProduct');