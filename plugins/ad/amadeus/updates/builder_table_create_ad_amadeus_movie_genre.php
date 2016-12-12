<?php namespace Ad\Amadeus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdAmadeusMovieGenre extends Migration
{
    public function up()
    {
        Schema::create('ad_amadeus_movie_genre', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('movie_id');
            $table->integer('genre_id');
            $table->primary(['movie_id','genre_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ad_amadeus_movie_genre');
    }
}
