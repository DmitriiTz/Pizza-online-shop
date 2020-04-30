<?php

use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group([
    'namespace' => 'V1',
    'prefix' => 'v1'
], function () {
    Route::group([
        'namespace' => 'Pizza',
        'prefix' => 'pizza'
    ], function () {
        Route::apiResource('/', 'PizzaController')->only(['index']);
    });

    Route::group([
        'namespace' => 'Order',
        'prefix' => 'order'
    ], function () {
        Route::apiResource('/', 'OrderController')->only(['index', 'store']);
    });

    Route::group([
        'namespace' => 'Core',
        'prefix' => 'user'
    ], function () {
        Route::apiResource('/', 'UserController')->only(['index', 'store']);
    });
});
