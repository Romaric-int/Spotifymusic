<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up() {
         Schema::create('songs', function (Blueprint $table) {
             $table->id();
             $table->string('title', 255);
             $table->string('url', 255);
             $table->string('genre', 255);
             $table->string('artiste', 255);
             $table->string('année', 255);
             $table->string('image', 255);

             $table->integer('votes');
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
        Schema::dropIfExists('songs');
    }
}
