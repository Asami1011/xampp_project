<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\TestController;

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

//以下を追加
//↓これはLaravel ver.7まで
//Route::get('/test/home', 'TestController@entrance');
//↓Laravel ver.8以降～
Route::get('/test/home', 'App\Http\Controllers\TestController@entrance');
/*
Route::get('/test/home', function () {
    return view('sample');
});
*/
//useでコントローラーをインポートする場合
//Route::get('/test/home', [TestController::class, 'entrance']);
