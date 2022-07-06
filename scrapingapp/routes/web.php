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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/scraping/home', 'App\Http\Controllers\ScrapingController@entrance');
Route::get('/scraping/add', 'App\Http\Controllers\ScrapingController@add');
Route::get('/scraping/result', 'App\Http\Controllers\ScrapingController@result');
Route::get('/scraping/contact', 'App\Http\Controllers\ScrapingController@contact');