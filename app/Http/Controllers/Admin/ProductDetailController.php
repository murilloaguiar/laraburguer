<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductDetail;
use App\Http\Requests\ProductDetailRequest;
use App\Http\Requests\UpdateProductDetailRequest;

class ProductDetailController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      $productDetail = ProductDetail::with(['product'])->get();

      if (count($productDetail)==0) {
         return response()->json(['erro'=>'Não existem Detalhes cadastrados'], 404);
      }
      
      return response()->json($productDetail,200);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      //
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \App\Http\Requests\ProductDetailRequest  $request
    * @return \Illuminate\Http\Response
    */
   public function store(ProductDetailRequest $request)
   {
      return response()->json(ProductDetail::create($request->validated()), 201);
   }

   /**
    * Display the specified resource.
    *
    * @param  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      $productDetail = ProductDetail::with(['product'])->find($id);
      
      if ($productDetail == null) {
         return response()->json(['erro'=>'O detalhe procurado não existe'], 404);
      }

      return response()->json($productDetail, 200);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Product_detail  $product_detail
    * @return \Illuminate\Http\Response
    */
   public function edit(ProductDetail $product_detail)
   {
      //
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \App\Http\Requests\ProductDetailRequest  $request
    * @param  $id
    * @return \Illuminate\Http\Response
    */
   public function update(UpdateProductDetailRequest $request, $id)
   {
      $productDetail = ProductDetail::find($id);
      if ($productDetail == null) {
         return response()->json(['erro'=>'O detalhe procurado não existe'], 404);
      }

      $productDetail->update($request->safe()->only(['ingredients', 'details']));
      return response()->json($productDetail, 200);
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
      $productDetail = ProductDetail::find($id);
      if ($productDetail == null) {
         return response()->json(['erro'=>'O detalhe procurado não existe'], 404);
      }

      $productDetail->delete();
      return response()->json(['mensagem'=>'Removido com sucesso']);
   }
}
