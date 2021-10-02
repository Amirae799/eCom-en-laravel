<?php

use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;

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
Route::group(['middleware'=>'auth:admin'],function (){
    Route::get('/admin','App\Http\Controllers\DashboardController@index')->name('admin.dashboard');
});
Route::group(['middleware'=>'guest:admin'],function (){
    Route::get('login','App\Http\Controllers\LoginController@getLogin')->name('admin.login');
    Route::post('login','App\Http\Controllers\LoginController@postLogin')->name('admin.login');
});





