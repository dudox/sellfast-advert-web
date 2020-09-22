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

Route::get('/','PagesController@index')->name('home');
Route::get('/menu','PagesController@menu')->name('menu');
Route::get('/settings','PagesController@settings')->name('settings');
Route::get('/starter','PagesController@starter')->name('starter');
Route::get('/premium','PagesController@premium')->name('premium');
Route::get('/vip','PagesController@vip')->name('vip');
Route::get('/basic','PagesController@basic')->name('basic');
Route::get('/pricing','PagesController@pricing')->name('pricing');



