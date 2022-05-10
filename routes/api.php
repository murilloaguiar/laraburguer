<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function(){

   Route::apiResource('address','User\AddressController');
   Route::apiResource('admin','Admin\AdminController');
   Route::apiResource('category','Admin\CategoryController');
   Route::apiResource('establishment','EstablishmentController');
   Route::apiResource('order','User\OrderController');
   Route::apiResource('product','Admin\ProductController');
   Route::apiResource('productDetail','Admin\ProductDetailController');
   Route::apiResource('photo','Admin\PhotoController');
   Route::get('getUserId', 'User\UserController@getUserId')->name('api.userId');
});
