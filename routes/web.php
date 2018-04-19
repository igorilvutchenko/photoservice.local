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

Route::resource('user', 'ImageUploadController@store');
Route::get('/upload', 'ImageUploadController@store');
// Route::post('/layout_select', 'ImageUploadController@store');
Route::post('/layout_select', 'LayoutSelectController@index');
Route::get('{layout_id}/layout_images_select/', 'LayoutSelectController@create');
Route::post('/layout_config/', 'LayoutConstructController@index');
// Route::get('/layout_images_select/{layout_id}/{image_id}', 'LayoutSelectController@create');
// Route::get('/layout_images_select/{layout_id}/{image_id}', 'LayoutConstructController@index');
// Route::get('/layout_config/{layout_id}/{image_id}', 'LayoutConstructController@index');
Auth::routes();

Route::get('/', 'HomeController@index');
