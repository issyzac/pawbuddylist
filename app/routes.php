<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@homeIndex');
Route::get('home', 'HomeController@homeIndex');


//Pets Controller Routes
Route::get('pets/index', 'PetsController@index');


//Tips Controller Routes
Route::get('tips/index', 'TipsController@index');