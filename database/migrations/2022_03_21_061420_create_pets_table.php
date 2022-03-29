<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id ();
            // $table->foreignId('pet_category_Id');
            $table->string('pet_name');
            $table->string('pet_categories_id');
            $table->string('pet_breed');
            $table->string('pet_size');
            $table->string('pet_color');
            $table->string('pet_life_span');
            $table->string('pet_height');
            $table->string('pet_age');
            $table->string('pet_weight');
            $table->string('rules');
            $table->string ('pet_health');
            $table->string('pet_quality');
            $table->string('pet_image')->nullable();
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
        Schema::dropIfExists('pets');
    }
}

