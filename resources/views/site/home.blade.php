@extends('site.layouts.app')

@include('site.layouts._partials.topo')

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

   <section class="container mt-4" id="star-section">
      <div class="row">
         <div class="col-sm-12 col-md-4 d-flex flex-column">
            <i class="bi bi-heart display-3"></i>
            <h5>Carinho</h5>
            <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, eveniet. </p>
         </div>
         <div class="col-sm-12 col-md-4 d-flex flex-column">
            <i class="bi bi-star display-3"></i>
            <h5>Qualidade</h5>
            <p class="text-muted">Nihil expedita atque quo repellendus, distinctio quibusdam fugit ullam iusto possimus libero quae animi aut.</p>
         </div>
         <div class="col-sm-12 col-md-4 d-flex flex-column">
            <i class="bi bi-hourglass display-3"></i>
            <h5>Rapidez</h5>
            <p class="text-muted">Nihil expedita atque quo repellendus, distinctio quibusdam fugit ullam iusto possimus libero quae animi aut.</p>
         </div>
      </div>
   </section>

   <section class="bg-dark" id="history-section">

      <div class="container">
         <div class="row">
            <div class="col-sm-12 col-md-6">
               <header>
                  <h4>Sobre nós</h4>

                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam eius ex ipsum illo sint numquam nostrum cupiditate nesciunt illum voluptas ea necessitatibus veniam doloribus fugit libero, laborum eaque atque quaerat?</p>
                  <ul>
                     <li>Algo</li>
                     <li>Algo</li>
                     <li>Algo</li>
                     <li>Algo</li>
                     <li>Algo</li>
                  </ul>
               </header>
            </div>

            <div class="col-sm-12 col-md-6 photo d-none d-md-block">
               
               <img src="{{asset('img/lanchonete-historia.jpg')}}" alt=""> 
               
            </div>
         </div>
      </div>
      
   </section>


@endsection