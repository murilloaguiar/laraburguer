<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Renderiza as views do front end
 */
class HomeController extends Controller
{
   /**
    * Create a new controller instance.
    *
    * @return void
    */
   public function __construct()
   {
      
   }

   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
   public function index()
   {
      return view('site.home');
   }

   public function catalog(){
      return view('site.catalogo');
   }

   public function bag(){
      return view('site.carrinho');
   }

   public function orders(){
      

      return view('site.pedido');
   }
}
