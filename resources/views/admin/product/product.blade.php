@extends('adminlte::page')

@section('title', 'Produto')

@section('content_header')
   <h1>Lista de produtos</h1>

   
@stop

@section('content')
   <a class="btn btn-success mb-4" href="{{route('admin.product.create')}}">
      Cadastrar produtos
   </a>

   @auth('admin')
      <h4 id="alert" class="text-danger"></h4>
      <table class="table table-striped table-hover">
         <thead>
            <tr>
               <th scope="col">Nome</th>
               <th scope="col">Categoria</th>
               <th scope="col">Editar</th>
               <th scope="col">Detalhes</th>
               <th scope="col">Excluir</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($products as $product)
               <tr>
                  <td>{{$product->name}}</td> 

                  @if ($product->category_id != null)
                     <td>{{$product->category->name}}</td>
                  @else
                     <td>Sem categoria</td>
                  
                  @endif

                  <td>
                     <button onclick="edit({{$product->id}})" class="btn btn-outline-secondary"><i class="fas fa-solid fa-pen"></i></button>
                  </td>
                  
                  @if ($product->productDetail != null)
                     <td>
                        <button onclick="detail({{$product->productDetail->id}})" class="btn btn-outline-info"><i class="fas fa-solid fa-eye"></i></button>
                     </td>
                  @else
                     <td>Sem detalhes</td>
                  @endif
               
                  <td>
                     <button onclick="remove({{$product->id}})" class="btn btn-outline-danger delete"><i class="fas fa-solid fa-trash"></i></button>
                  </td>
               </tr>
            @endforeach
         </tbody>
      </table>

      {{$products->appends($request)->links()}}
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

         fetch(`http://localhost:8000/api/v1/product/${id}`,myHeaders)
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
         location.assign(`http://localhost:8000/admin/produto/editar/${id}`)
      }

      const detail = (id) =>{
         location.assign(`http://localhost:8000/admin/produto-detalhe/ver/${id}`)
      }
   </script>
@stop