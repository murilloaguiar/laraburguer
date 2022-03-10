<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserHasAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_has_addresses', function (Blueprint $table) {
         $table->unsignedInteger('users_id');
         $table->unsignedInteger('adress_id');
         $table->string('recipient',100);
         $table->timestamps();

         $table->primary(['users_id', 'adress_id']);

         $table->foreign('users_id')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
         $table->foreign('adress_id')->references('id')->on('adresses')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_has_addresses');
    }
}
