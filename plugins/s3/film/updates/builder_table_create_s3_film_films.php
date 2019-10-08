<?php namespace S3\Film\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateS3FilmFilms extends Migration
{
    public function up()
    {
        Schema::create('s3_film_films', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('status');
            $table->integer('director_id')->nullable();
            $table->string('country')->default('vn');
            $table->string('year')->default('2000');
            $table->string('duration')->default('00:00');
            $table->string('quality')->default('720p');
            $table->string('resolution')->default('1024x768');
            $table->string('language')->default('vn');
            $table->text('content')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('s3_film_films');
    }
}
