<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/catalogo','HomeController@catalog')->name('catalogo');
Route::get('/carrinho','HomeController@bag')->name('carrinho');
Route::get('/pedido','HomeController@orders')->name('pedido');

Route::middleware('auth')->prefix('user')->group(function(){
   Route::get('perfil', 'User\UserController@index');
});


Route::prefix('admin')->name('admin.')->group(function(){
   Route::get('login','AuthAdmin\LoginController@showLoginForm')->name('login');
   Route::post('login','AuthAdmin\LoginController@login')->name('login');

   Route::middleware('auth:admin')->group(function(){
      Route::get('/','Admin\HomeAdminController@index')->name('index');
      Route::get('pedido','Admin\HomeAdminController@order')->name('order');
   });

});


