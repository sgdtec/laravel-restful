<?php
/**
Route::get('categories', 'Api\CategoryController@index')->name('index');
Route::post('categories', 'Api\CategoryController@store')->name('store');
Route::put('categories/{id}', 'Api\CategoryController@update')->name('update');
Route::delete('categories/{id}', 'Api\CategoryController@delete')->name('delete');
*/

Route::apiResource('categories', 'Api\CategoryController');
Route::apiResource('products', 'Api\ProductController');
