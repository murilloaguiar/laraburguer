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
      echo 'Aqui ficará a página de exibição';
   }

   public function catalog(){
      return 'Página de catálogo aqui';
   }

   public function bag(){
      return 'Página de carrinho aqui';
   }

   public function orders(){
      if(auth()->user() == null) return 'Faça login para ver os seus pedidos';

      return 'Página de pedidos aqui';
   }
}
