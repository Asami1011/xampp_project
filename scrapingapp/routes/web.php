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
<<<<<<< HEAD
Route::get('/scraping/result', 'App\Http\Controllers\ScrapingController@result');
Route::get('/scraping/contact', 'App\Http\Controllers\ScrapingController@contact');
=======
Route::get('/scraping/result', 'App\Http\Controllers\ScrapingController@result');
>>>>>>> 16205f472fba316f52bcbca9bbae09209d3a04b9
