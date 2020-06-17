<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();

/*Route::group(['middleware' => 'auth'], function(){
Route::group(['middleware' => 'is_admin'],function(){
   Route::get('/orders', 'OrderController@adminOrders')->name('home');   
});
Route::group(['middleware' => 'is_user'],function(){
Route::get('/orders', 'OrderController@userOrders')->name('home');   
});        
});*/

Route::get('/orders', 'OrderController@adminOrders')->name('home');
Route::get('/orders/{id}', 'OrderController@showOrder');




Route::get('/', 'MainController@index')->name('index');
Route::get('/categories', 'MainController@categories')->name('categories');


Route::get('/basket', 'BasketController@basket')->name('basket');
Route::get('/basket/place', 'BasketController@basketPlace')->name('basket-place');
Route::post('/basket/add/{id}', 'BasketController@basketAdd')->name('basket-add');
Route::post('/basket/remove/{id}', 'BasketController@basketRemove')->name('basket-remove');
Route::post('/basket/place', 'BasketController@basketConfirm')->name('basket-confirm');


Route::get('/{category}', 'MainController@category')->name('category');
Route::get('/{category}/{product?}', 'MainController@product')->name('product');





