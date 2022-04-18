<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      $products = ['Cachorro quente simples', 'Nachos', 'Hambúrguer', 'Sanduíche natural', 'Coxinha', 'Coca-cola', 'Skol', 'Heineken', 'Suco', 'Mojito', 'Cosmopolitan', 'X-Tudo', 'Laraburguer', 'Carne de sol com fritas', 'Peixe Frito', 'Asinha'];

      foreach ($products as $product) {
         Product::create([
            'name' => $product,
            'price' => rand(5,20),
            'category_id' => rand(1,10),
            'status' => 1
         ]);
      }
   }
}
