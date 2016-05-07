<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', 'Index\HomeController@index')->name('index');
Route::get('admin', 'Admin\IndexController@index')->name('admin');
Route::get('article', 'Admin\ArticleController@index');
Route::get('db', 'IndexController@index');

