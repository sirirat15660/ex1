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
Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');
Route::get('/user', 'HomeController@index');
Route::get('/user/creat', 'HomeController@creat');
Route::get('/user/{name}', 'HomeController@showname');
Route::get('/user/{age}', 'HomeController@ShownameAndage');
