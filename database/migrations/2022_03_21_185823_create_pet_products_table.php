<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pet_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pet_product_categories_id');
            $table->string('pet_product_name');
            $table->string('pet_product_details');
            $table->string('pet_product_picture');
            $table->string('pet_product_price');
            $table->string('pet_product_status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pet_products');
    }
}
