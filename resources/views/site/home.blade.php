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

   <section class="container-fluid mt-4" id="star-section">
      <header>
         <h1 class="text-center">Nossos diferenciais</h1>
      </header>
      <div class="row justify-content-around">

         @component('site._components.card-diff',[
            'title' => 'Carinho',
            'text'=> 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, eveniet.',
            'class'=>'bi bi-heart'
         ])
             
         @endcomponent

         @component('site._components.card-diff',[
            'title' => 'Qualidade',
            'text'=> 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, eveniet.',
            'class'=>'bi bi-star'
         ])
             
         @endcomponent

   
         @component('site._components.card-diff',[
            'title' => 'Rapidez',
            'text'=> 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, eveniet.',
            'class'=>'bi bi-hourglass'
         ])
             
         @endcomponent

         @component('site._components.card-diff',[
            'title' => 'Sabor',
            'text'=> 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, eveniet.',
            'class'=>'bi bi-award'
         ])
             
         @endcomponent

         

      </div>
   </section>

   <section class="background-dark" id="history-section">

      <div class="container">
         <div class="row">
            <div class="col-sm-12 col-md-6" id="content-history">
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

            <div class="col-sm-12 col-md-6 d-none d-md-block" id="photo-history">

               <div class="d-none d-lg-block" id="striped">
                  <svg width="250" height="250">

                     <circle cx="20" cy="20" r="5" fill="white" />
                     <circle cx="80" cy="20" r="5" fill="white" />
                     <circle cx="140" cy="20" r="5" fill="white" />
                     <circle cx="200" cy="20" r="5" fill="white" />

                     <circle cx="20" cy="80" r="5" fill="white" />
                     <circle cx="80" cy="80" r="5" fill="white" />
                     <circle cx="140" cy="80" r="5"fill="white" />
                     <circle cx="200" cy="80" r="5" fill="white" />

                     <circle cx="20" cy="140" r="5" fill="#F0A500" />
                     <circle cx="80" cy="140" r="5" fill="#F0A500" />
                     <circle cx="140" cy="140" r="5" fill="#F0A500" />
                     <circle cx="200" cy="140" r="5" fill="#F0A500" />

                     <circle cx="20" cy="200" r="5" fill="#F0A500" />
                     <circle cx="80" cy="200" r="5" fill="#F0A500" />
                     <circle cx="140" cy="200" r="5" fill="#F0A500" />
                     <circle cx="200" cy="200" r="5" fill="#F0A500" />

                     

                  </svg>
               </div>
               
               <img src="{{asset('img/lanchonete-historia.jpg')}}" alt=""> 

               
            </div>
         </div>
      </div>
      
   </section>




@endsection