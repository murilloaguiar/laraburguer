<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::create('products', function (Blueprint $table) {
         $table->id();
         $table->unsignedBigInteger('categories_id')->nullable();
         $table->string('name',150);
         $table->float('price',5,2)->default(0.01);
         $table->integer('status')->default(1);
         $table->timestamps();

         $table->foreign('categories_id')->references('id')->on('categories')->nullOnDelete()->cascadeOnUpdate();
      });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
      Schema::dropIfExists('products');
   }
}
