<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      Admin::create([
         'name'=>'Main Admin',
         'lastname'=> 'Owner',
         'email' => 'admin@admin.com',
         'password' => bcrypt('12345678'),
         'status' => 1
      ]);
   }
}
