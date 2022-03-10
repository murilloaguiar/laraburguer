<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductHasOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_has_orders', function (Blueprint $table) {
            $table->unsignedInteger('products_id');
            $table->unsignedInteger('orders_id');
            $table->integer('quantidade');
            $table->timestamps();

            $table->primary(['products_id', 'orders_id']);

            $table->foreign('products_id')->references('id')->on('products')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('orders_id')->references('id')->on('orders')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_has_orders');
    }
}
