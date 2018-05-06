<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
        public function up()
    {
        Schema::create('promos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('coverimage');
            $table->text('title');
            $table->text('description')->nullable();
            $table->text('slug');
            $table->string('file');
            $table->boolean('status');
            $table->integer('category');
            $table->integer('setpurchase');
            $table->string('purchaselink')->nullable();
            $table->string('videolink')->nullable();
            $table->string('downloadlink')->nullable();
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
        Schema::dropIfExists('promos');
    }
}
