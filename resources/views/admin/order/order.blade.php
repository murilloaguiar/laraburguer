@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
   <h1>Lista de pedidos</h1>

   
@stop

@section('content')
   
   @auth('admin')
      <h4 id="alert" class="text-danger"></h4>
      <table class="table table-striped table-hover">
         <thead>
            <tr>
               <th scope="col">ID</th>
               <th scope="col">Status</th>
               <th scope="col">Nome do usuário</th>
               <th scope="col">Produtos</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($orders as $order)
               <tr>
                  <th>{{$order->id}}</th>
                  <th>{{$order->status}}</th>
                  <td>{{$order->user->name}}</td>

                  <td>
                     
                     @foreach ($order->products as $product)
                        {{$product->name}}
                     @endforeach
                     
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