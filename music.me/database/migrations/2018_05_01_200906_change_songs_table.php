<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('songs', function(Blueprint $table){
            $table->integer('genre_id')->unsigned();
            $table->integer('album_id')->unsigned();
            $table->integer('artist_id')->unsigned();
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');
            $table->foreign('album_id')->references('id')->on('albums')->onDelete('cascade');
            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('cascade');
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
