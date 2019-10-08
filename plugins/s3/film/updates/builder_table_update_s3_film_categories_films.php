<?php namespace S3\Film\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateS3FilmCategoriesFilms extends Migration
{
    public function up()
    {
        Schema::table('s3_film_categories_films', function($table)
        {
            $table->integer('category_id')->unsigned()->change();
            $table->integer('film_id')->unsigned()->change();
            $table->dropColumn('id');
            $table->primary(['category_id','film_id']);
        });
    }
    
    public function down()
    {
        Schema::table('s3_film_categories_films', function($table)
        {
            $table->dropPrimary(['category_id','film_id']);
            $table->integer('category_id')->unsigned(false)->change();
            $table->integer('film_id')->unsigned(false)->change();
            $table->increments('id')->unsigned();
        });
    }
}
