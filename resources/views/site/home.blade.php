@extends('site.layouts.app')

@include('site.layouts._partials.topo')

@section('css')
   <link rel="stylesheet" href="{{asset('css/style-index.css')}}">
@endsection

@section('conteudo')

   <section>
      <header class="d-flex align-items-center" id="header-index">
         <div class="row justify-content-center">
            <div class="col-10">
               <h1 class="display-4" id="texto-header-index">Algum texto legal bem aqui</h1>
               <a class="btn  btn-lg btn-outline-warning" href="{{route('catalog')}}">Cardápio</a>
            </div>
         </div>
      </header>
   </section>

   <section id="diff-section">

      <header class="py-3">
         <h1 class="text-center text-brown"><strong>Nossos diferenciais</strong></h1>
      </header>

      <div class="container">
         <div class="row g-4">

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
      </div>
   </section>

   <section class="background-black" id="about-section">

      <div class="container">
         <div class="row">
            <div class="col-sm-12 col-md-6" id="content-about">
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

            <div class="col-sm-12 col-md-6 d-none d-md-block" id="photo-about">

               @component('site._components.striped', ['fillBottom' => '#F0A500',
               'fillTop'=>'white'])
                   
               @endcomponent
               
               <img src="{{asset('img/lanchonete-historia.jpg')}}" alt=""> 

               
            </div>
         </div>
      </div>
      
   </section>

   <section id="products-section" class="position-relative">

      <svg width="300px" height="300px" class="position-absolute bottom-0 d-none d-md-block">
         <circle cx="0" cy="350" r="200" fill="#c9b38e" />
      </svg>

      <div class="container">

         <div class="row">
            <div class="sol-sm-12 col-md-4">
               <h1 class="text-brown">O que vendemos</h1>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet asperiores, iusto quo cumque, animi officia voluptatibus voluptas ducimus similique atque delectus corporis assumenda nemo dignissimos quos, laudantium facere aspernatur est.</p>
               
            </div>
         
            <div class="col-sm-12 col-md-8">
               <div class="row gy-3">
                  @component('site._components.product-pill', [
                     'image'=> 'icon/hamburguer.svg', 
                     'product' => 'Hamburger Artesanal',
                     
                  ])
                      
                  @endcomponent

                  @component('site._components.product-pill', [
                     'image'=> 'icon/porcoes.svg', 
                     'product' => 'Porções'
                  ])
                      
                  @endcomponent

                  @component('site._components.product-pill', [
                     'image'=> 'icon/drink.svg', 
                     'product' => 'Bebidas'
                  ])
                      
                  @endcomponent

                  @component('site._components.product-pill', [
                     'image'=> 'icon/combos.svg', 
                     'product' => 'Combos',
                     
                  ])

                  @endcomponent

                  @component('site._components.product-pill', [
                     'image'=> 'icon/petiscos.svg', 
                     'product' => 'Petiscos',
                     
                  ])

                  @endcomponent

               </div>
               
            </div>
            
         </div>
      </div>
      
   </section>

@endsection