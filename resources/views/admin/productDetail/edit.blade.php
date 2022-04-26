@extends('adminlte::page')

@section('title', 'Editar Detalhes')

@section('content_header')

   <h1>Editar detalhe</h1>
@stop

@section('content')

   @auth('admin')
      <div class="mb-3">
         <label for="product_id" class="form-label">Produto</label>
         <select id="product_id" class="form-select form-control">
            <option value="" disabled>Selecione</option>
            @foreach ($products as $product)
               @if ($product->product_id == $product->id)
                  <option value="{{$product->id}}" selected>{{$product->name}}</option>
               @else
                  <option value="{{$product->id}}">{{$product->name}}</option>
               @endif
               
            @endforeach
            
         </select>

         <label for="ingredient" class="form-label">Ingredientes</label>
         <input type="text" class="form-control" id="ingredient" value="{{$productDetail->ingredients}}">

         <label for="detail" class="form-label">Detalhes</label>
         <input type="text" class="form-control" id="detail" value="{{$productDetail->detail}}">
         
      </div>

      <button class="btn btn-success" type="submit" id="submit">Cadastrar</button>

      <a class="btn btn-secondary" href="{{url()->previous()}}">
         Voltar
      </a>
       
   @endauth
@stop