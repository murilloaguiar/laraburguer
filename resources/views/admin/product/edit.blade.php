@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
   <h1>Editar produto</h1>

   
@stop

@section('content')

   @auth

      
      <div class="mb-3">
         <label for="name" class="form-label">Nome da categoria</label>
         <input type="text" class="form-control" id="name" value="{{$product->name}}">

         <input type="hidden" id="id" value="{{$product->id}}">

         <label for="price" class="form-label">Preço</label>
         <input type="text" class="form-control" id="price" value="{{$product->price}}">

         <label for="status" class="form-label">Status</label>
         <select id="status" class="form-select form-control">
            @if ($product->status == 1)
               <option value="1" selected>Ativo</option>
               <option value="2">Inativo</option>
            @else
               <option value="1">Ativo</option>
               <option value="2" selected>Inativo</option>
            @endif
            
         </select>

         <label for="category_id" class="form-label">Categoria</label>
         <select id="category_id" class="form-select form-control">
            <option value="" disabled>Selecione</option>
            @foreach ($categories as $category)
               <option value="{{$category->id}}" {{$product->category_id == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
            @endforeach
            
         </select>
         
         


   
      </div>

      <button class="btn btn-success" type="submit" id="submit">Atualizar</button>
      <a class="btn btn-secondary" href="{{url()->previous()}}">
         Voltar
      </a>

      <div class="alert mt-3" role="alert" id="alert">
         
      </div>
      
   @endauth
@stop

@section('js')
   <script>
      const submit = document.querySelector('#submit')
      submit.addEventListener('click', (event)=>{
         
         const name = document.querySelector('#name').value
         const price = document.querySelector('#price').value
         const status = document.querySelector('#status').value
         const category_id = document.querySelector('#category_id').value
         const id = document.querySelector('#id').value
         const alert = document.querySelector('#alert')

         //const form = new FormData()

         //form.append('name', name)
         const data = {
            name,
            price,
            status,
            category_id
         }

         const myHeaders = {
            method: 'PUT',
            headers: {
               'Content-Type': 'application/json',
               Accept: 'application/json'
            },
            body: JSON.stringify(data)
            //body: form
         }

         fetch(`http://localhost:8000/api/v1/product/${id}`, myHeaders)
            .then(response => response.json())
            .then(data => {
               if(data.hasOwnProperty('errors')){
                  alert.classList.remove('alert-success')
                  alert.innerHTML = ''
                  alert.classList.add('alert-danger')
                  alert.innerHTML = Object.values(data.errors)
               }else{
                  alert.classList.remove('alert-danger')
                  alert.innerHTML = ''
                  alert.classList.add('alert-success')
                  alert.innerHTML = `O produto foi atualizado`
               }
            })
            .catch(error=>console.log(erro))
      
      })
   </script>
@stop