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

Route::get('/', ['as' => 'home', 'uses' => 'PageController@home']);
Route::get('recipes', ['as' => 'recipes', 'uses' => 'PageController@recipes']);
Route::get('search', ['as' => 'search', 'uses' => 'PageController@search']);
