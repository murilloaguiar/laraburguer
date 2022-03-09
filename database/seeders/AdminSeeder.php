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
         'lastname'=> 'Admin',
         'email' => 'admin@main.com',
         'password' => bcrypt('123456'),
         'status' => 1
      ]);
   }
}
