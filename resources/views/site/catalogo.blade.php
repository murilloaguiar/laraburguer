@extends('site.layouts.app')

@include('site.layouts._partials.topo')

@section('css')
   <link rel="stylesheet" href="{{asset('css/style-catalog.css')}}">
@endsection

@section('conteudo')

   <section>
      <header class="d-flex align-items-center" id="header-catalog">
      </header>
   </section>

   <section class="padding-section">
      <div class="container">
         <div class="row" id="title-catalog">

            <div class="col-7">
               
               <h1>Confira nossos produtos</h1>
               <p class="card-text">Lanches, porções e petiscos de qualidade, feitos com carinho e habilidade.</p>
               
            </div>
            
            <div class="col-5">
               <div class="row">
                  <div class="col-12">
                     <form class="d-flex" method="get" action="{{route('catalog')}}">
                        <input class="form-control me-2" type="search" placeholder="Pesquisar produto" aria-label="Search" name="pesquisa">
                        <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                     </form>
            
                  </div>
               </div>
               <div class="row">
                  <div class="col-12">
                     <form class="d-flex" method="get" action="{{route('catalog')}}">
                        <select class="form-select" aria-label="Default select example" name="categoria">
                           <option selected disabled>Filtre por categoria</option>
                           @foreach ($categories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>
                           @endforeach
                        </select>
                        <button class="btn btn-outline-success" type="submit"><i class="bi bi-filter"></i></button>
                     </form>
                  </div>
               </div>
               
            </div>
         </div>
      </div>
   </section>

   <section class="container pb-5">
      <div class="row row-cols-2 row-cols-lg-3 g-4">

         @foreach ($products as $product)

            <div class="col">
               <a href="{{route('catalog.product',['product'=>$product->id])}}">
                  <div class="card h-100">
 
                     <img src="{{'storage/'.$product->cover_photo}}" class="card-img-top" alt="...">
                     
                     <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Categoria: {{$product->category->name}}</small></p>
               </a>
                        <button onclick="addCart({{$product->id}})" class="btn btn-outline-info submit" id="{{$product->id}}">Adicionar ao carrinho</button>
                     </div>
                     <div class="card-footer">
                        <p>Preço: R$ {{$product->price}}</p> 
                        
                     </div>
                  </div>
               
            </div>

         @endforeach

      </div>
   </section>
   
@endsection

@section('js')

   <script>

      const buttons = document.querySelectorAll('.submit')
      //console.log(buttons)
      const products = JSON.parse(localStorage.getItem('products')) ?? []

      buttons.forEach(button =>{
         
         products.forEach(product => {
            if(button.id == product.id) button.innerHTML = 'Remover do carrinho'
         });
      })
         
      
      const addCart = (id)=>{

         const button = document.getElementById(id)
        
         if (button.innerHTML == 'Remover do carrinho') {
            products.map((product, index)=>{
               if(product.id==id){
                  products.splice(index, 1)
               }
            })
            
            localStorage.setItem('products', JSON.stringify(products))
            
            button.innerHTML = 'Adicionar ao carrinho'

         }else if(button.innerHTML == 'Adicionar ao carrinho') {
            products.push({
               id
            })

            localStorage.setItem('products', JSON.stringify(products))

            
            //console.log(button)
            button.innerHTML = 'Remover do carrinho'
         }
        
         //console.log(products)

         
      }



   </script>

@stop