<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table-> string ('customer_image')->nullable();
            $table->string('customer_first_name');
            $table->string('customer_last_name');
            $table->string('customer_address');
            $table->string('customer_country');
            $table->string('customer_city');
            $table->string('customer_phone')->nullable();
            $table->string('customer_email')->nullable();
            

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
        Schema::dropIfExists('customers');
    }
}
