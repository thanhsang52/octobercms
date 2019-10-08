<?php namespace S3\Film\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateS3FilmCategoriesFilms extends Migration
{
    public function up()
    {
        Schema::create('s3_film_categories_films', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('category_id');
            $table->integer('film_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('s3_film_categories_films');
    }
}
