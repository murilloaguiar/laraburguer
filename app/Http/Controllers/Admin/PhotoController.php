<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Photo;
use App\Http\Requests\PhotoRequest;

class PhotoController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      //
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
    * @param  \App\Http\Requests\PhotoRequest  $request
    * @return \Illuminate\Http\Response
    */
   public function store(PhotoRequest $request)
   {
      //dd($request->image);
      $photo = new Photo();
      //dd($request->image[0]);
      $image = $request->image;
      $image_urn = $image->store('product_images','public');
      $photo = $photo->create([
         'product_id' => $request->product_id,
         'image' => $image_urn
      ]);
      return response()->json($photo, 201);
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Photo  $photo
    * @return \Illuminate\Http\Response
    */
   public function show(Photo $photo)
   {
      //
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Photo  $photo
    * @return \Illuminate\Http\Response
    */
   public function edit(Photo $photo)
   {
      //
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \App\Http\Requests\PhotoRequest  $request
    * @param  \App\Models\Photo  $photo
    * @return \Illuminate\Http\Response
    */
   public function update(PhotoRequest $request, Photo $photo)
   {
      //
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id){
      $photo = Photo::find($id);

      if ($photo === null) {
         return response()->json(['erro'=> 'O recurso não existe'], 404);
      }

      $photo->delete();
      return response()->json(['mensagem'=>'Removido com sucesso']);
   }
}
