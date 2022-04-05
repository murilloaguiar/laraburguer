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
         <h1 class="text-center text-brown"><strong>Nossos diferenciais</strong></h1>
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

   <section class="background-black" id="history-section">

      <div class="container">
         <div class="row">
            <div class="col-sm-12 col-md-6" id="content-history">
               <header>
                  <h3 class="text-brown">Sobre nós</h3>

                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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

               @component('site._components.striped', ['fillBottom' => '#F0A500',
               'fillTop'=>'white'])
                   
               @endcomponent
               
               <img src="{{asset('img/lanchonete-historia.jpg')}}" alt=""> 

               
            </div>
         </div>
      </div>
      
   </section>

@endsection