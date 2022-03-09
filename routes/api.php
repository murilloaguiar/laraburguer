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

   Route::apiResource('endereco','AddressController');
   Route::apiResource('admin','AdminController');
   Route::apiResource('categoria','CategoryController');
   Route::apiResource('estabelecimento','EstablishmentController');
   Route::apiResource('pedido','OrderController');
   Route::apiResource('produto','ProductController');
   Route::apiResource('detalhe-produto','ProductDetailController');
});
