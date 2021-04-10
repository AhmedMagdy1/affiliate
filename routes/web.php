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
Route::middleware('auth')->group(function (){
    Route::get('/order/create', 'OrderController@create');
    Route::post('/order/store', 'OrderController@store');
    Route::get('/orders', 'OrderController@index');
    Route::get('/orders/{id}/edit', 'OrderController@edit');
    Route::put('/orders/{id}', 'OrderController@update');
    Route::get('/', 'HomeController@index')->name('home');
});


Auth::routes();

