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

// Route::get('/', function () {
//     return view('master');
// });
Route::get('/','App\Http\Controllers\FrontendController@home');
Route::get('products/{id}','App\Http\Controllers\FrontendController@product');
Route::get('delete/{id}','App\Http\Controllers\FrontendController@delete');
Route::get('edit/{id}','App\Http\Controllers\FrontendController@edit');
Route::post('update','App\Http\Controllers\FrontendController@update');
Route::get('delete-categories/{id}','App\Http\Controllers\FrontendController@deletecat');
Route::get('edit-categories/{id}','App\Http\Controllers\FrontendController@editcat');
Route::post('updatecat','App\Http\Controllers\FrontendController@updatecat');