@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
   <h1>Lista de categorias</h1>

   
@stop

@section('content')

   <a class="btn btn-success mb-4" href="{{route('admin.category.create')}}">
      Cadastrar categorias
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
         @foreach ($categories as $category)
            <tr>
               <th>{{$category->id}}</th>
               <td>{{$category->name}}</td>

               <td>
                  <button onclick="edit({{$category->id}})" class="btn btn-outline-secondary"><i class="fas fa-solid fa-pen"></i></button>
               </td>

               <td>
                  <button onclick="remove({{$category->id}})" class="btn btn-outline-danger delete"><i class="fas fa-solid fa-trash"></i></button>
               </td>
            </tr>
         @endforeach
      </tbody>
   </table>
   @endauth
@stop

@section('js')
   <script>
      
      const remove = (id)=>{
         let confirmacao = confirm('tem certeza que deseja remover esse registro?')

         if (!confirmacao) return false

         const myHeaders = {
            method: 'DELETE',
            headers: {
               Accept: 'application/json',
               'Content-type': 'application/json',
            }
         }

         fetch(`http://localhost:8000/api/v1/category/${id}`,myHeaders)
            .then(response => response.json())
            .then(data=>{

               window.scrollTo(0,0)

               document.querySelector('#alert').innerHTML = data.mensagem

               setTimeout(() => {
                   location.reload()  
               }, 3000);

            })
            .catch(error=>console.log(error))
      }

      const edit = (id) =>{
         location.assign(`http://localhost:8000/admin/categoria/editar/${id}`)
      }

   </script>
@stop