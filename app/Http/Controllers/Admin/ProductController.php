<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      $product = Product::with(['category','productDetail'])->get();
      return response()->json($product, 200);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  App\Http\Requests\ProductRequest  $request
    * @return \Illuminate\Http\Response
    */
   public function store(ProductRequest $request)
   {
      //dd($request);
      $product = Product::create($request->validated());
      return response()->json($product, 201);
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Product  $product
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      $product = Product::with(['category','productDetail'])->find($id);
      //dd($product);
      if ($product === null) {
         return response()->json(['erro'=>'O produto procurado não existe'], 404);
      }
      
      return response()->json($product, 200);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Product  $product
    * @return \Illuminate\Http\Response
    */
   public function edit(Product $product)
   {
      //
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  App\Http\Requests\ProductRequest  $request
    * @param  $id
    * @return \Illuminate\Http\Response
    */
   public function update(ProductRequest $request, $id)
   {
      $product = Product::find($id);
      //dd($product);
      if ($product === null) {
         return response()->json(['erro'=> 'O recurso não existe'], 404);
      }

      $product->update($request->validated());

      return response()->json($product, 200);
      
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
      $product = Product::find($id);

      if ($product === null) {
         return response()->json(['erro'=> 'O recurso não existe'], 404);
      }

      $product->delete();
      return response()->json(['mensagem'=>'Removido com sucesso']);
   }
}
