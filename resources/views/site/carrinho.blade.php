@extends('site.layouts.app')

@section('conteudo')

   <h1>Carrinho</h1>


@endsection

@section('js')
   <script>
      let products = JSON.parse(localStorage.getItem('products'))

      const myHeaders = {
         headers:{
            Accept: 'application/json'
         }
      }

      products.forEach(product => {
         fetch(`http://localhost:8000/api/v1/product/${product.id}`)
            .then(response=>response.json())
            .then(data=>console.log(data))




      });



   </script>

@endsection