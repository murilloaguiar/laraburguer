<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      $categories = ['Refrigerantes','Lanches Artesanais','Cervejas','Porções','Agua','Sucos', 'Promoções', 'Combos', 'Petiscos', 'Drinks'];

      foreach($categories as $value) {
         Category::create([
            'name'=>$value
         ]);
      }
      
   }
}
