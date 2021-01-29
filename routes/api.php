<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\Auth\SignUpController;
use \App\Http\Controllers\Auth\SignInController;
use \App\Http\Controllers\Auth\SignOutController;

use \App\Http\Controllers\ProfileController;
use \App\Http\Controllers\ProductController;

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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

/*Route::group(['namespace'=>'App\Http\Controllers'], function (){

    Route::group(['prefix'=>'auth', 'namespace'=>'Auth'], function (){
        Route::post('signin', 'SignInController');
    });

});*/

Route::group(['prefix'=>'auth'], function (){
    Route::post('signup', SignUpController::class);
    Route::post('signin', SignInController::class);
    Route::post('signout', SignOutController::class);
});

Route::get('profile', ProfileController::class);

Route::apiResource('products', ProductController::class);

