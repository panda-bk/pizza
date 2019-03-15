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

Route::group(['prefix' => 'sizer'], function()
    {
        Route::get('','SizersController@list');
        Route::get('/edit/{id}','SizersController@edit');
    });
    Route::group(['prefix' => 'flavor'], function()
    {
        Route::get('','FlavorsController@listFlavors');
    });
    Route::group(['prefix' => 'order'], function(){
        Route::post('save','OrdersController@store');
    }); 