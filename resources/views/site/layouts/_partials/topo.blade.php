<nav class="navbar navbar-expand-xl container" id="menu">
   
      <a class="navbar-brand me-0 d-flex align-items-center" href="/">
         <i class="bi bi-shop display-6 me-2"></i>
         Laraburguer
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <i class="bi bi-card-text display-6 text-white"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="/">Página inicial</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{route('catalog')}}">Catálogo</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{route('user.order')}}">Meus Pedidos</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{route('bag')}}">Carrinho</a>
            </li>

            @auth('web')
            
               <li class="nav-item dropdown" id="dropDown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     {{ Auth::user()->name }}
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <li><a class="dropdown-item" href="{{route('user.profile')}}">Perfil</a></li>
                     <li><a class="dropdown-item" href="#">Endereços</a></li>
                     <li><hr class="dropdown-divider"></li>
                     <form action="{{route('logout')}}" method="post">
                        <li><button type="submit" class="dropdown-item">Sair</button></li>
                     </form>
                  </ul>
                </li>
                  
            @endauth

            @guest
               <li class="nav-item">
                  <a class="nav-link" href="{{route('login')}}">Entrar</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{route('register')}}">Registrar</a>
               </li>
            @endguest


            
         </ul>
      </div>
   
</nav>