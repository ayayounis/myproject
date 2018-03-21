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

//Restaurants
Route::get('add/restaurant', 'RestaurantController@create')->name('restaurant.create');
Route::post('add/restaurant', 'RestaurantController@store')->name('restaurant.store');

//Drivers
Route::get('drivers', 'DriversController@index')->name('drivers.index');;
Route::get('driver/{id}', 'DriversController@get');
Route::get('add/driver', 'DriversController@create')->name('drivers.create');
Route::post('add/driver', 'DriversController@store')->name('drivers.store');

//Orders
Route::get('orders', 'OrdersController@index');
Route::get('order/{id}', 'OrdersController@get');
Route::get('add/order', 'OrdersController@create')->name('orders.create');
Route::post('add/order', 'OrdersController@store')->name('orders.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
