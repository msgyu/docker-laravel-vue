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

// サブドメイン（上でないと"/"が利用できない）
Route::domain('test.laravel.test')->group(function () {
    Route::get('/', function () {
        return "ok";
    });
});


Route::get('/', function () {
    return view('welcome');
});
