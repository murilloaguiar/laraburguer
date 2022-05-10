<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;

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
      if ($request->pesquisa) $products = Product::with(['category','photos','productDetail'])->orderBy('name')->where('name', 'like' ,'%'.$request->pesquisa.'%')->get();
      else if ($request->categoria) $products = Product::with(['category','photos','productDetail'])->orderBy('name')->where('category_id', $request->categoria)->get();
      else $products = Product::with(['category','photos','productDetail'])->orderBy('name')->get();

      //dd($products[0]->ProductDetail);
      //dd(($products[9]->photos->isEmpty()));
      $categories = Category::orderBy('name')->get();
      
      return view('site.catalogo', [
         'products'=> $products,
         'categories'=> $categories,
      ]);
   }

   public function catalogShowProduct($id){

      $product = Product::with(['category', 'productDetail','photos'])->find($id);
      
      return view('site.catalogo-product', [
         'product'=> $product,
         
      ]);
   }

   public function cart(){
      return view('site.carrinho');
   }

   public function orders(){
      return view('site.pedido');
   }
}
