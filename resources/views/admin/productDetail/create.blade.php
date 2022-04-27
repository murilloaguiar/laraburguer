@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
   <h1>Cadastrar Detalhes do Produto</h1>
   
@stop

@section('content')

   @auth('admin')

      
      <div class="mb-3">
         <label for="product_id" class="form-label">Produto</label>
         <select id="product_id" class="form-select form-control">
            <option value="" selected disabled>Selecione</option>
            @foreach ($products as $product)
               <option value="{{$product->id}}">{{$product->name}}</option>
            @endforeach
            
         </select>
         

         <label for="ingredient" class="form-label">Ingredientes</label>
         <input type="text" class="form-control" id="ingredient">

         <label for="detail" class="form-label">Detalhes</label>
         <input type="text" class="form-control" id="detail" value="{{ old('detail')}}">
         
      </div>

      <button class="btn btn-success" type="submit" id="submit">Cadastrar</button>

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
         const alert = document.querySelector('#alert')

         //const form = new FormData()

         //form.append('name', name)
         const data = {
            product_id,
            ingredients,
            details
         }

         //console.log(JSON.stringify(data))

         const myHeaders = {
            method: 'POST',
            headers: {
               'Content-Type': 'application/json',
               Accept: 'application/json'
            },
            body: JSON.stringify(data)
            //body: form
         }

         fetch('http://localhost:8000/api/v1/productDetail', myHeaders)
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
                  alert.innerHTML = `O produto ${data.name} foi cadastrado`
               }
            })
            .catch(error=>console.log(error))
      
      })
   </script>
@stop