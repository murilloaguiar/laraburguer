@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
   <h1>Lista de produtos</h1>

   
@stop

@section('content')
   <a class="btn btn-success mb-4" href="{{route('admin.product.create')}}">
      Cadastrar produtos
   </a>

   @auth
      <h4 id="alert" class="text-danger"></h4>
      <table class="table table-striped table-hover">
         <thead>
            <tr>
               <th scope="col">ID</th>
               <th scope="col">Nome</th>
               <th scope="col">Editar</th>
               <th scope="col">Excluir</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($products as $product)
               <tr>
                  <th>{{$product->id}}</th>
                  <td>{{$product->name}}</td>

                  <td>
                     <button onclick="edit({{$product->id}})" class="btn btn-outline-secondary"><i class="fas fa-solid fa-pen"></i></button>
                  </td>

                  <td>
                     <button onclick="remove({{$product->id}})" class="btn btn-outline-danger delete"><i class="fas fa-solid fa-trash"></i></button>
                  </td>
               </tr>
            @endforeach
         </tbody>
      </table>
   @endauth
@stop

@section('js')
   <script>
      
   </script>
@stop