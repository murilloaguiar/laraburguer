<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 
**Projeto feito para testar conhecimentos em Laravel, Vue e API's**

# Sobre o projeto / Levantamento de requisitos
Projeto visa um sistema web de pedidos para uma lanchonete fictícia chamada Laraburguer. Será possível montar pedidos, adicioná-los ao carrinho e efetuar a compra. 

A aplicação possuirá um front-end contendo informações sobre a lanchonte e os produtos oferecidos. 

## Conteúdos
Frontend contendo informações da empresa

* Página inicial com
   * história da empresa
   * diferenciais
   * o que vendem
   * horário de funcionamento
   * localização
   * botão para chamar no whatsapp

* Página de catálogo contendo
   * informações sobre os produtos vendidos
      * fotos
      * ingredientes, se aplicáveis
      * preço
      * alguma descrição, se necessário
      * botão para adicionar o produto ao pedido
   * visualização de todos os produtos ou por categoria.

* Página de login contendo
   * formulário de login com os campos email e senha

* Página de cadastro
   * formulário para cadastrar um novo usuário
      * nome
      * sobrenome
      * email
      * endereço completo até o estado
      * senha
      * confirmação de senha

* Página de carrinho contendo
   * os itens do pedido
   * valor total a ser pago

* Pagina de pedidos feitos contendo
   * todos os pedidos que o cliente já fez 
   * detalhes do pedido
      * produtos 
      * preços pagos
   * status dos pedidos feitos

O cliente poderá fazer os seus pedidos dentro da própria aplicação, e poderá também mandar uma mensagem para o whatsapp business da empresa solicitando atendimento. 

Caso o cliente opte por fazer o pedido dentro da própria plataforma ele precisará se cadastrar na aplicação para efetuar a compra. Além disso o dono da Laraburguer terá acesso restrito ao backend da aplicação, visualizando um dashboard com as informações de vendas da lanchonete e os pedidos a serem feitos.
 
### Analytics
O dashboard conterá dados dos valores arrecadados juntamente com o numero de pedidos, podendo filtrar por mês, ano ou dia. 

O dashboarda também apresentará a quantidade de vezes que cada produto foi vendido e o valor total que ele arrecadou.

### Produtos
No dashboard o administrador poderá cadastrar, editar e excluir produtos. Esses produtos que serão os mostrados no frontend da aplicação.

### Pedidos
O pedido será recebido e mostrado no painel em uma aba específica, em que o administrador poderá avisar sobre o novo pedido. O pedido já chega com o status "Em aberto"
Por parte do backend, o pedido poderá ter seus status modificado para "Em execução", "Cancelado", "Rota de entrega" e "Concluído". Se o pedido for cancelado, uma mensagem de justificativa deverá ser criada. Todos esses status estarão visíveis para o usuário no frontend.
O cliente só poderá fazer um pedido se a lanchonete estiver aberta no momento em que o pedido for efetivado. 


## Tabelas
Clientes - users
   * nome
   * sobrenome
   * email
   * endereco
   * senha

Administradores
   * nome
   * sobrenome
   * email
   * endereco
   * senha

Pedidos
   * produto
   * cliente
   * valor
   * data
   * status
   * quantidade

Produtos
   * fotos
   * ingredientes, se aplicáveis
   * preço
   * alguma descrição, se necessário


---
## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).


## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
