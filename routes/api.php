<?php


Route::post('/auth/token', 'Api\AuthController@getAccessToken');
Route::post('/auth/reset-password', 'Api\AuthController@passwordResetRequest');
Route::post('/auth/change-password', 'Api\AuthController@changePassword');

Route::group(['middleware' => 'auth:api', 'namespace' => 'Api'], function () {
    Route::get('/users', 'ListingController@users')->middleware('admin');
    Route::resource('/posts', 'PostController', ['only' => ['index', 'create', 'edit']]);
});
