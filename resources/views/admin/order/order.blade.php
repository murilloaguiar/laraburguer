@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
   <h1>Pedidos em aberto</h1>

   
@stop

@section('content')
   @auth
      <ul id="list">
         
      </ul>
   @endauth
@stop

@section('js')
   <script>
      /*const myHeaders = {
         headers: {
            Accept: 'application/json',
            'Content-type': 'application/json'
         },
         
      }

      fetch('http://localhost:8000/api/v1/order',myHeaders)
         .then(response => response.json())
         .then(data=>{
            data.forEach(element => {
               const li = document.createElement('li')
               li.innerHTML = element.name
               document.querySelector('#list').appendChild(li)
            });
         })
         .catch(error=>console.log(error))*/
   </script>
@stop