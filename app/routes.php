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
Route::get('/dashboard', 'AdminController@index');

Route::get('/dashboard/users', 'UsersController@index');
Route::get('/dashboard/users/new', 'UsersController@create');
Route::get('/dashboard/users/{id}/edit', 'UsersController@edit');
Route::get('/dashboard/users/{id}/delete', 'UsersController@destroy');

Route::get('/dashboard/roles', 'RolesController@index');
Route::get('/dashboard/roles/new', 'RolesController@create');
Route::get('/dashboard/roles/{id}/edit', 'RolesController@edit');
Route::get('/dashboard/roles/{id}/delete', 'RolesController@delete');

Route::get('/dashboard/types', 'TypesController@index');
Route::get('/dashboard/types/new', 'TypesController@showCreate');
Route::post('/dashboard/types/new', 'TypesController@create');
Route::get('/dashboard/types/{id}/edit', 'TypesController@edit');
Route::get('/dashboard/types/{id}/delete', 'TypesController@delete');

Route::get('/dashboard/products', 'ProductsController@show');
Route::get('/dashboard/products/type/{id}', 'ProductsController@getByType');
Route::get('/dashboard/products/new', 'ProductsController@showCreate');
Route::post('/dashboard/products/new', 'ProductsController@create');
Route::get('/dashboard/products/{id}/edit', 'ProductsController@edit');
Route::post('/dashboard/products/{id}/edit', 'ProductsController@save');
Route::get('/dashboard/products/{id}/delete', 'ProductsController@delete');

Route::get('/product/{id}', 'PagesController@show');
Route::get('/contact', 'PagesController@contact');
Route::get('/about', 'PagesController@about');
Route::get('/', 'PagesController@index');



Route::get('/shop', 'ProductsController@index');
Route::get('/product/type/{id}', 'ProductsController@productsByType');



Route::get('/login', 'SessionsController@create');
Route::get('/logout', 'SessionsController@destroy');
Route::resource('sessions', 'SessionsController', ['only' => ['create', 'store', 'destroy']]);

