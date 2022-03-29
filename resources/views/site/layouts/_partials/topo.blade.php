<nav class="navbar navbar-expand-lg" id="menu">
   <div class="container">
      <a class="navbar-brand" href="/"><i class="bi bi-shop display-5"> Laraburguer</i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <i class="bi bi-card-text display-6 text-white"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="/">Página inicial</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{route('catalogo')}}">Catálogo</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{route('pedido')}}">Pedidos</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{route('carrinho')}}">Carrinho</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{route('login')}}">Entrar</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{route('register')}}">Registrar</a>
            </li>
         </ul>
      </div>
   </div>
</nav>