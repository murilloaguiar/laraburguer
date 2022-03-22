<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;

class AdminController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      return response()->json(Admin::all(), 200);
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
    * @param  \App\Http\Requests\AdminRequest $request
    * @return \Illuminate\Http\Response
    */
   public function store(AdminRequest $request)
   {
      return response()->json(Admin::create($request->validated()),201);
   }

   /**
    * Display the specified resource.
    *
    * @param  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      $admin = Admin::find($id);
      
      if($admin === null) return response()->json(['erro'=>'Recurso não encontrado']);
      return response()->json($admin, 200);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Admin  $admin
    * @return \Illuminate\Http\Response
    */
   public function edit(Admin $admin)
   {
      //
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \App\Http\Requests\AdminRequest $request
    * @param  $id
    * @return \Illuminate\Http\Response
    */
   public function update(AdminRequest $request, $id)
   {
      $admin = Admin::find($id);
      
      if($admin === null) return response()->json(['erro'=>'Recurso não encontrado']);

      $admin->update($request->validated());
      return response()->json($admin, 200);
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Admin  $admin
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
      $admin = Admin::find($id);
      
      if($admin === null) return response()->json(['erro'=>'Recurso não encontrado']);

      $admin->delete();

      return response()->json(['msg'=>'Admin excluído com sucesso']);
   }
}
