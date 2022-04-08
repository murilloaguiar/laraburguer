@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
   <h1>Criar categoria</h1>

   
@stop

@section('content')

   @auth('admin')

      
      <div class="mb-3">
         <label for="name" class="form-label">Nome da categoria</label>
         <input type="text" class="form-control" id="name">
         </div>
         <button class="btn btn-success" type="submit" id="submit">Cadastrar</button>
         <a class="btn btn-secondary" href="{{url()->previous()}}">
            Voltar
         </a>

         <p id="alert"></p>
      </div>
      
   @endauth
@stop

@section('js')
   <script>
      const submit = document.querySelector('#submit')
      submit.addEventListener('click', (event)=>{
         
         const name = document.querySelector('#name').value

         //const form = new FormData()

         //form.append('name', name)
         const data = {
            name
         }

         const myHeaders = {
            method: 'POST',
            headers: {
               'Content-Type': 'application/json',
               Accept: 'application/json'
            },
            body: JSON.stringify(data)
            //body: form
         }

         fetch('http://localhost:8000/api/v1/category', myHeaders)
            .then(response => response.json())
            .then(data => {
               console.log(data)
               if(data.hasOwnProperty('errors')){
                  document.querySelector('#alert').innerHTML = data.errors.name
               }else{
                  document.querySelector('#alert').innerHTML = `A categoria ${data.name} foi cadastrada`
               }
            })
            .catch(error=>console.log(erro))
      
      })
   </script>
@stop