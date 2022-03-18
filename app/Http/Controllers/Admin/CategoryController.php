<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      $category = Category::with('products')->orderBy('name')->get();

      if (count($category)==0) {
         return response()->json(['erro'=>'Não existem categorias cadastradas'], 404);
      }

      return response()->json($category,200);
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
    * @param  \App\Http\Requests\CategoryRequest $request
    * @return \Illuminate\Http\Response
    */
   public function store(CategoryRequest $request)
   {
      return response()->json(Category::create($request->validated()),201);
   }

   /**
    * Display the specified resource.
    *
    * @param  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      $category = Category::with('products')->find($id);

      if ($category === null) {
         return response()->json(['erro'=>'Recurso inexistente'], 404);
      }

      return response()->json($category, 200);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Category  $category
    * @return \Illuminate\Http\Response
    */
   public function edit(Category $category)
   {
      //
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \App\Http\Requests\CategoryRequest  $request
    * @param  $id
    * @return \Illuminate\Http\Response
    */
   public function update(CategoryRequest $request, $id){
      $category = Category::find($id);

      if ($category === null) {
         return response()->json(['erro'=>'Recurso inexistente'], 404);
      }

      $category->update($request->validated());
      return response()->json($category, 200);
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
      $category = Category::find($id);

      if ($category === null) {
         return response()->json(['erro'=>'Recurso inexistente'], 404);
      }

      $category->delete();
      return response()->json(['mensagem'=>'Removido com sucesso']);
   }
}
