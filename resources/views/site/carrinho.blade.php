@extends('site.layouts.app')

@section('css')
   <link rel="stylesheet" href="{{asset('css/style-cart.css')}}">
@endsection

@section('conteudo')

   @include('site.layouts._partials.topo')

   <section>
      <header class="d-flex align-items-center" id="header-cart">
      </header>
   </section>

<ul class="list-group">
   
</ul>


@endsection

@section('js')
   <script>
      const products = JSON.parse(localStorage.getItem('products'))
      console.log(products.length)

      if(products.length == 0){
         const li = document.createElement('li')
         li.className = "list-group-item"

         li.innerHTML = "Sem itens no carrinho"
         document.querySelector('.list-group').appendChild(li)

      }else if(products.length > 0){

         const myHeaders = {
            headers:{
               Accept: 'application/json'
            }
         }

         products.forEach(product => {
            fetch(`http://localhost:8000/api/v1/product/${product.id}`)
               .then(response=>response.json())
               .then(data=>{
                  const li = document.createElement('li')
                  li.className = "list-group-item"
                  li.innerHTML = data.name
                  li.id = `product_${product.id}`

                  const button = document.createElement('button')
                  button.className = 'btn btn-danger'
                  button.innerHTML = 'remover'
                  button.id = product.id

                  button.onclick = (event)=>{
                     // console.log(event.target)
                     products.map((product, index)=>{
                        if(product.id==event.target.id){
                           products.splice(index, 1)
                        }
                     })

                     localStorage.setItem('products', JSON.stringify(products))
                     document.getElementById(`product_${event.target.id}`).remove()
                  }
    
                  li.appendChild(button)

                  document.querySelector('.list-group').appendChild(li)
               })

         });
      }



   </script>

@endsection