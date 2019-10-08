<?php namespace S3\Film\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateS3FilmCategoriesFilms2 extends Migration
{
    public function up()
    {
        Schema::rename('s3_film_films_categories', 's3_film_categories_films');
    }
    
    public function down()
    {
        Schema::rename('s3_film_categories_films', 's3_film_films_categories');
    }
}
