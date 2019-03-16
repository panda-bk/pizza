<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/ 

Route::group(['prefix' => 'sizer'], function(){
    Route::get('','SizersController@list');
});

Route::group(['prefix' => 'flavor'], function(){
    Route::get('','FlavorsController@list');
});
Route::group(['prefix' => 'order'], function(){
    Route::post('save','OrdersController@store');
    Route::get('{id}','OrdersController@getOrder');
    Route::post('/{id}/additional','OrdersController@additional');
}); 
Route::group(['prefix' => 'additional'], function(){
    Route::get('','AdditionalsController@list');
}); 