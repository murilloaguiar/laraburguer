<?php

namespace App\Http\Controllers;

use App\Models\Product;
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

   public function catalog(Request $request){

      //dd($request->pesquisa);
      if ($request->pesquisa) $products = Product::with(['category'])->orderBy('name')->where('name', 'like' ,'%'.$request->pesquisa.'%')->get();
      else $products = Product::with(['category'])->orderBy('name')->get();
      
      return view('site.catalogo', [
         'products'=>$products
      ]);
   }

   public function bag(){
      return view('site.carrinho');
   }

   public function orders(){
      

      return view('site.pedido');
   }
}
