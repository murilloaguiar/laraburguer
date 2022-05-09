@extends('adminlte::page')

@section('title', 'Fotos do produto')

@section('content_header')
   <h1>Fotos do produto: {{$product->name}}</h1>
@stop

@section('content')
   @auth('admin')
      <a class="btn btn-success mb-4" href="{{route('admin.photo.create',['productId'=>$product->id])}}">
         Cadastrar Fotos
      </a>
      <h4 id="alert" class="text-danger"></h4>
      @if($product->photos->isNotEmpty())
         
         <table class="table table-striped table-hover">
            <thead>
               <tr>
                  <th scope="col">Foto</th>
                  <th scope="col">Excluir</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($product->photos as $photo)
                  <tr>
                     <td><img src="{{asset('storage/'.$photo->image)}}" alt=""></td> 
                     
                     <td>
                        <button onclick="remove({{$photo->id}})" class="btn btn-outline-danger delete"><i class="fas fa-solid fa-trash"></i></button>
                     </td>
                  </tr>
               @endforeach
            </tbody>
            
         </table>
      @else
         <h4>Produto sem fotos</h4>
      @endif
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

         fetch(`http://localhost:8000/api/v1/photo/${id}`,myHeaders)
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
   </script>


@stop
    

    
