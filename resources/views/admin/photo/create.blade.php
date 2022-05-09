@extends('adminlte::page')

@section('title', 'Cadastrar fotos')

@section('content_header')
   <h1>Adicionar fotos para {{$name}}</h1>
@stop

@section('content')
   <label for="image" class="form-label">Fotos</label>
   <input type="file" id="image">

   <input type="hidden" id="id" value="{{$id}}">

   <button class="btn btn-success" id="submit">Cadastrar</button>

   <a class="btn btn-secondary" href="{{url()->previous()}}">
      Voltar
   </a>

   <div class="alert mt-3" role="alert" id="alert">
      
   </div>

@stop

@section('js')
   <script>
      const submit = document.querySelector('#submit')

      submit.addEventListener('click', ()=>{
         let image = document.querySelector('#image').files[0]
         let id = document.querySelector('#id').value
         console.log(image)
         let formData = new FormData()

         formData.append('image',image)
         formData.append('product_id',id)

         let myHeaders = {
            method: 'POST',
            headers:{
               //'Content-Type': 'multipart/form-data',
               Accept: 'application/json'
            },
            body: formData
         }

         fetch('http://localhost:8000/api/v1/photo', myHeaders)
            .then(response => response.json())
            .then(data => console.log(data))

      })

   </script>
@stop