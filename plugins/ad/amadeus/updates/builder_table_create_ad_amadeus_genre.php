<?php namespace Ad\Amadeus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdAmadeusGenre extends Migration
{
    public function up()
    {
        Schema::create('ad_amadeus_genre', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('genre_name');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ad_amadeus_genre');
    }
}
