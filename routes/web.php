<?php

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

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', 'InfoController@index');
Route::get('/home', 'InfoController@index')->name('home');

Route::get('/recipes', 'RecipesController@index');

Route::get('/shopping-list', 'IngredientsController@list');

Auth::routes();
