<nav class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="container-fluid">
      <a class="navbar-brand" href="/">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
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