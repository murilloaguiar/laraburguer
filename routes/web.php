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

Route::get('/catalog','HomeController@catalog');
Route::get('/bag','HomeController@bag');
Route::get('/orders','HomeController@orders');

Route::middleware('auth')->prefix('user')->group(function(){
   Route::get('profile', 'User\UserController@index');
});


Route::prefix('admin')->name('admin.')->group(function(){
   Route::get('login','AuthAdmin\LoginController@showLoginForm')->name('login');
   Route::post('login','AuthAdmin\LoginController@login')->name('login');

   Route::middleware('auth:admin')->group(function(){
      Route::get('/','Admin\AdminController@index')->name('index');
   });

});


