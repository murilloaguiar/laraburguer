@extends('adminlte::page')

@section('title', 'Detalhes do Produto')

@section('content_header')
   <h1>Detalhes</h1>
@stop

@section('content')

   @auth('admin')
      <a class="btn btn-secondary" href="{{url()->previous()}}">
         Voltar
      </a>

      <input type="hidden" value="{{$id}}" id="id">
      
      <p id="content">

      </p>
      
   @endauth

@stop

@section('js')
   <script>
      const id = document.querySelector('#id').value
      console.log(id)
      const myHeaders = {
         headers: {
            Accept: 'application/json'
         }
      }
      fetch(`http://localhost:8000/api/v1/productDetail/${id}`, myHeaders)
         .then(response => response.json())
         .then(data => {
            document.querySelector('#content').innerHTML = `${data.ingredients ?? 'sem ingredientes'} | ${data.details}`
            
         })
         //.catch(e => console.log(e))
   </script>
@stop