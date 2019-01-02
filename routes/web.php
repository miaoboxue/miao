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

Route::get('/order', 'Order\OrderController@order');

Route::get('/insert', 'Order\OrderController@insert');
Route::get('/update/{uid}', 'Order\OrderController@update');
Route::get('/delete/{uid}', 'Order\OrderController@delete');
Route::get('/list', 'Order\OrderController@list');


Route::get('/order/{id}', 'Order\OrderController@order');

