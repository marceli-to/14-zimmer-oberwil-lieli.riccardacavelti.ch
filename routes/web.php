<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', 'PageController@index')->name('page.home');
Route::get('/en', 'PageController@index')->name('page.home');
Route::get('/de', 'PageController@index')->name('page.home');

