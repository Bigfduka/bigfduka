<?php namespace Ad\Amadeus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdAmadeus extends Migration
{
    public function up()
    {
        Schema::table('ad_amadeus_', function($table)
        {
            $table->renameColumn('images', 'image');
        });
    }
    
    public function down()
    {
        Schema::table('ad_amadeus_', function($table)
        {
            $table->renameColumn('image', 'images');
        });
    }
}
