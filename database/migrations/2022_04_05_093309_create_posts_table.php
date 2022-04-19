<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\PseudoTypes\False_;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pet_category_id');
            $table->foreignId('user_id');
            $table->foreignId('recever_id')->nullable();
            $table->string('picture')->nullable();
            $table->string('title')->nullable();
            $table->string('details')->nullable();
            $table->string('type')->nullable();
            $table->string('status')->default('pending');
            $table->date('from_date')->nullable();
            $table->date('to_date')->nullable();
            $table->string('is_temporary')->default('no');
            // $table->string('post_status')->default('pending');
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
        Schema::dropIfExists('posts');
    }
}
