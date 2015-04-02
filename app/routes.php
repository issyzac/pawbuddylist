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
Route::get('administrator', 'HomeController@a_index');
Route::any('admin_panel', array('as' => 'panel', 'uses' => 'HomeController@admin_panel_index'));

Route::post('addtype', 'HomeController@add_type');
Route::post('category', 'HomeController@add_category');
Route::get('getcategory/{id}', 'HomeController@select_category');
Route::post('add_new_tip', 'HomeController@add_tip');
Route::post('add_new_pet', 'HomeController@add_pet');

//Pets Controller Routes
Route::get('pets/index', 'PetsController@index');

//Tips Controller Routes
Route::get('tips/index', 'TipsController@index');