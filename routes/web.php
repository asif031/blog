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

Route::get('/abcd', function () {
    return view('welcome');
});

Route::get('/test', 'TestController@test');

Route::get('/blog-list', 'BLogController@blogList');

Route::get('/blog-details', 'BLogController@blogDetails');

Route::get('/blog-edit', 'BLogController@blogEdit');
