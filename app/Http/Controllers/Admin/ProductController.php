<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

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
      
      if (count($product)==0) {
         return response()->json(['erro'=>'Não existem produtos cadastrados'], 404);
      }
      return response()->json($product, 200);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create(){
      
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  App\Http\Requests\ProductRequest  $request
    * @return \Illuminate\Http\Response
    */
   public function store(ProductRequest $request){
      //dd($request);
      $request->validated();

      $image = $request->cover_photo;
      $image_urn = $image->store('cover_photo_product','public');

      $product = Product::create([
         'name' => $request->name,
         'price' => $request->price,
         'status' => $request->status,
         'cover_photo' => $image_urn,
         'category_id' => $request->category_id
      ]);
      return response()->json($product, 201);
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Product  $product
    * @return \Illuminate\Http\Response
    */
   public function show($id){
      $product = Product::with(['category','productDetail','photos'])->find($id);
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
   public function update(Request $request, $id){
      //dd($request->name);
      $product = Product::find($id);
      //dd($product);
      if ($product === null) {
         return response()->json(['erro'=> 'O recurso não existe'], 404);
      }
      
      // $product->fill($request->validated());
      // $product->save();

      Storage::disk('public')->delete($product->cover_photo);
         
      
      $image = $request->cover_photo;
      $image_urn = $image->store('cover_photo_product','public');

      // $product->cover_photo = $image_urn;
   
      $product->update([
         'name' => $request->name,
         'price' => $request->price,
         'status' => $request->status,
         'cover_photo' => $image_urn,
         'category_id' => $request->category_id
      ]);

      

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
