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

Route::get('/catalogo','HomeController@catalog')->name('catalog');
Route::get('/carrinho','HomeController@bag')->name('bag');


Route::middleware('auth')->prefix('user')->name('user.')->group(function(){
   Route::get('/pedido','HomeController@orders')->name('order');
   Route::get('perfil', 'User\HomeUserController@index')->name('profile');
});

//--------Rotas do administrador
//--------Responsáveis por retornar as views com os componentes que são requeridos
Route::prefix('admin')->name('admin.')->group(function(){
   Route::get('login','AuthAdmin\LoginController@showLoginForm')->name('login');
   Route::post('login','AuthAdmin\LoginController@login')->name('login');

   Route::middleware('auth:admin')->group(function(){
      Route::get('/','Admin\HomeAdminController@index')->name('index');
      Route::get('pedido','Admin\HomeAdminController@order')->name('order');

      Route::get('produto','Admin\HomeAdminController@product')->name('product');

      Route::get('produto/criar','Admin\HomeAdminController@productCreate')->name('product.create');

      Route::get('produto/editar/{id}','Admin\HomeAdminController@productEdit')->name('product.edit');

      Route::get('produto-detalhe','Admin\HomeAdminController@productDetail')->name('productDetail');
      
      Route::get('produto-detalhe/ver/{id}','Admin\HomeAdminController@productDetailShow')->name('productDetail.show');
      
      Route::get('produto-detalhe/editar/{id}','Admin\HomeAdminController@productDetailEdit')->name('productDetail.edit');

      Route::get('produto-detalhe/criar','Admin\HomeAdminController@productDetailCreate')->name('productDetail.create');

      Route::get('categoria','Admin\HomeAdminController@category')->name('category');

      Route::get('categoria/criar','Admin\HomeAdminController@categoryCreate')->name('category.create');

      Route::get('categoria/editar/{id}','Admin\HomeAdminController@categoryEdit')->name('category.edit');

      Route::get('categoria/ver/{id}','Admin\HomeAdminController@categoryShow')->name('category.show');

      Route::get('perfil','Admin\ProfileAdminController@index')->name('profile');
   });

});

Route::fallback(function(){
   return 'Recurso indisponível';
});
