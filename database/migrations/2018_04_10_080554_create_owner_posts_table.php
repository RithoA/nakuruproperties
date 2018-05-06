<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnerPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    
    Schema::create('owner_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id');
            $table->integer('owner_id');
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
       Schema::dropIfExists('owner_posts');

    }
}
