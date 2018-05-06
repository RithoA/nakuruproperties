<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostphotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postphotos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id');
            $table->string('photo');
            $table->timestamps();
            // $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postphotos');
    }
}
