<?php
/**
 * JWT 
 */
Route::post('auth', 'Auth\AuthApiController@authenticate');

Route::group(['prefix' => 'v1', 'namespace' => 'Api\v1'], function() { 
    Route::get('categories/{id}/products', 'CategoryController@products');

    Route::apiResource('categories', 'CategoryController');
    Route::apiResource('products', 'ProductController');
});



