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


/*
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *
 * Pages Routes
 *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 */


Route::get('/', 'PagesController@index');
Route::get('/shop', 'PagesController@shop');
Route::get('/contact', 'PagesController@contact');
Route::get('/login', 'PagesController@login');
Route::get('/product/{id}/', 'PagesController@product');
Route::get('/product', 'PagesController@product');//temporal
Route::get('/about', 'PagesController@about');

