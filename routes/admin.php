<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\Middleware\ShareErrorsFromSession;
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//notice we have a prefix ( admin) group for this route
Route::group(['namespace' => 'Dashboard', 'middleware' => 'guest:admin' ],function (){

    Route::get('/login', 'loginController@login')->name('admin.login');
    Route::post('/login','loginController@post')->name('admin.post.login');
});

Route::group(['namespace' => 'Dashboard', 'middleware' => 'auth:admin' ],function (){
    Route::get('/','dashboardController@index')->name('admin.dashboard');
});
