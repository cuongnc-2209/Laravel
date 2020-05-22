<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/adduser', 'HomeController@adduser')->name('adduser');
Route::get('/edituser', 'HomeController@edituser')->name('edituser');
Route::get('/viewuser', 'HomeController@viewuser')->name('viewuser');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
