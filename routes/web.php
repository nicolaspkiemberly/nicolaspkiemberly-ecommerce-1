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

Route::get('/', 'LandingPageController@index')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/shop', 'ShopController@index')->name('shop');

Route::get('/cart', 'CartController@index')->name('cart');

Route::get('/shop/detail/{id}', 'ShopController@show')->name('detail');

Route::get('/shop/category/{category_id}', 'ShopController@category')->name('category');

Route::post('/cart/store', 'CartController@store')->name('store');

Route::patch('/cart/{id}', 'CartController@update')->name('update');

Route::post('/checkout', 'CheckoutController@store')->name('checkout');

Route::delete('/cart/delete/{id}', 'CartController@delete')->name('delete');