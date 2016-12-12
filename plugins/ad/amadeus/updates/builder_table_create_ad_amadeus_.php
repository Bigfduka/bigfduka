<?php namespace Ad\Amadeus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdAmadeus extends Migration
{
    public function up()
    {
        Schema::create('ad_amadeus_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('discription');
            $table->string('images');
            $table->string('link');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ad_amadeus_');
    }
}
