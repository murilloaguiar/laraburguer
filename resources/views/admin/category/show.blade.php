@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
   <h1>Lista de categorias</h1>

   
@stop

@section('content')

   <a class="btn btn-success mb-4" href="{{url()->previous()}}">
      Voltar
   </a>

   @auth('admin')

   <h2>Produtos da categoria</h2>
   <input type="hidden" value="{{$id}}" id="id">
   
   <table class="table table-striped table-hover">
      <thead>
         <tr>
            <th scope="col">Nome</th>
         </tr>
      </thead>
      <tbody id="tbody">
         <tr>

         </tr>
      </tbody>
   </table>
   @endauth
@stop

@section('js')
   <script>
      
      const body = document.querySelector('#tbody')
      const id = document.querySelector('#id').value
         
      const myHeaders = {
         headers: {
            Accept: 'application/json',
            'Content-type': 'application/json',
         }
      }

      fetch(`http://localhost:8000/api/v1/category/${id}`,myHeaders)
         .then(response => response.json())
         .then(data=>{

            if(data.products.length == 0){
               const row = document.createElement('tr')
               const name = document.createElement('td')
               name.innerHTML = 'Não existem produtos para essa categoria ainda'
               row.appendChild(name)
               body.appendChild(row)
            }else{
               data.products.forEach(element => {
                  const row = document.createElement('tr')
                  const name = document.createElement('td')
                  name.innerHTML = element.name
                  row.appendChild(name)
                  body.appendChild(row)
               });
            }

         })
         .catch(error=>console.log(error))
      
   </script>
@stop