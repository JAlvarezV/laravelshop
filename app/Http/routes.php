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

Route::get('/', 'HomeController@index');

Route::get('articles/{id}','SingleItemController@index');

Route::get('user','UserSettingsController@index');
Route::post('user','UserSettingsController@update');

Route::auth();

Route::post('cart','CartController@add');
Route::get('cart','CartController@get');
Route::get('cart/delete','CartController@delete');

Route::get('admin','AdminController@index');
Route::get('admin/usuarios','AdminController@listUsers');
Route::get('admin/productos','AdminController@listItems');

Route::get('admin/delete/item/{id}','AdminController@deleteItem');
Route::get('admin/delete/user/{id}','AdminController@deleteUser');
Route::get('admin/edit/user/{id}','AdminController@editUser');
Route::post('admin/save/user', 'AdminController@updateUser');
Route::get('admin/edit/item/{id}','AdminController@editItem');
Route::post('admin/save/item', 'AdminController@updateItem');

Route::get('admin/add/user','AdminController@newUser');
Route::get('admin/add/item','AdminController@newItem');

Route::post('admin/save/nuser','AdminController@addUser');
Route::post('admin/save/nitem','AdminController@addItem');


