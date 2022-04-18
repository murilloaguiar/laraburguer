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

            <div class="col-8">
               
               <h1 class="display-4">Confira nossos produtos</h1>
               <p class="card-text">Lanches, porções e petiscos de qualidade, feitos com carinho e habilidade.</p>
               
            </div>
            
            <div class="col-4">
               <div class="row">
                  <div class="col-12">
                     pesquise o produto
                  </div>
               </div>
               <div class="row">
                  <div class="col-12">
                     filtre os resultados por categoria
                  </div>
               </div>
               
            </div>
         </div>
      </div>
   </section>

   <section class="container">
      <div class="row row-cols-1 row-cols-md-3 g-4">

         @foreach ($products as $product)
            <div class="col">
               <div class="card">
                  <img src="{{asset('img/lanche-capa.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                     <h5 class="card-title">{{$product->name}}</h5>
                     <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                     <p class="card-text"><small class="text-muted">Categoria: {{$product->category->name}}</small></p>
                  </div>
                  <div class="card-footer">
                     Preço: R$ {{$product->price}}
                  </div>
               </div>
            </div>
         @endforeach

      </div>
   </section>
   


@endsection