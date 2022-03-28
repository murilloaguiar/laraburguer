@extends('site.layouts.app')

@section('conteudo')

   <section>
      <header class="d-flex align-items-center" id="header-index">
         <div class="row justify-content-center">
            <div class="col-md-10">
               <h1 class="display-4" id="texto-header-index">Algum texto legal bem aqui</h1>
               <a class="btn  btn-lg btn-outline-warning" href="{{route('catalogo')}}">Cardápio</a>
            </div>
         </div>
      </header>
   </section>

   <section class="container mt-4">
      <div class="row">
         <div class="col-4 d-flex flex-column align-items-center">
            <i class="bi bi-heart display-3"></i>
            <h5>Carinho</h5>
         </div>
         <div class="col-4 d-flex flex-column align-items-center">
            <i class="bi bi-star display-3"></i>
            <h5>Qualidade</h5>
         </div>
         <div class="col-4 d-flex flex-column align-items-center">
            <i class="bi bi-hourglass display-3"></i>
            <h5>Rapidez</h5>
         </div>
      </div>
   </section>


@endsection