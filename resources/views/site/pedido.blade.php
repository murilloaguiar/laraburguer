@extends('site.layouts.app')

@guest
   @section('conteudo')

      <h5>Faça login para continuar</h5>


   @endsection
       
@endguest

@auth
    
   @section('conteudo')

      <h1>Catálogo</h1>


   @endsection

@endauth