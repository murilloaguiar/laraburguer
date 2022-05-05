@extends('adminlte::page')

@section('title', 'Editar Detalhes')

@section('content_header')

   <h1>Editar detalhe</h1>
@stop

@section('content')

   @auth('admin')
      <div class="mb-3">
         <label for="product" class="form-label">Produto</label>
         <input id="product" class="form-select form-control" readonly value="{{$productDetail->product->name}}">

         <input id="product_id" type="hidden" value="{{$productDetail->product->id}}">
     
         <input type="hidden" id="id" value="{{$productDetail->id}}">

         <label for="ingredient" class="form-label">Ingredientes</label>
         <input type="text" class="form-control" id="ingredient" value="{{$productDetail->ingredients}}">

         <label for="detail" class="form-label">Detalhes</label>
         <input type="text" class="form-control" id="detail" value="{{$productDetail->details}}">
         
      </div>

      <button class="btn btn-success" id="submit">Atualizar</button>

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
      
         const product_id = document.querySelector('#product_id').value
         const ingredients = document.querySelector('#ingredient').value
         const details = document.querySelector('#detail').value
         const id = document.querySelector('#id').value
         const alert = document.querySelector('#alert')

         //const form = new FormData()

         //form.append('name', name)
         const data = {
            product_id,
            ingredients,
            details,
         }

         console.log(data)
         const myHeaders = {
            method: 'PUT',
            headers: {
               'Content-Type': 'application/json',
               Accept: 'application/json'
            },
            body: JSON.stringify(data)
            //body: form
         }

         
         fetch(`http://localhost:8000/api/v1/productDetail/${id}`, myHeaders)
         .then(response => response.json())
         .then(data => {
            console.log(data)
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