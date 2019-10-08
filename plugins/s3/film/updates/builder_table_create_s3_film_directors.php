<?php namespace S3\Film\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateS3FilmDirectors extends Migration
{
    public function up()
    {
        Schema::create('s3_film_directors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('s3_film_directors');
    }
}
