<?php namespace S3\Film\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateS3FilmFilms3 extends Migration
{
    public function up()
    {
        Schema::table('s3_film_films', function($table)
        {
            $table->string('slug');
            $table->integer('director_id')->default(0)->change();
            $table->text('content')->default('null')->change();
            $table->string('tags', 191)->default('null')->change();
            $table->string('thumbnail', 191)->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('s3_film_films', function($table)
        {
            $table->dropColumn('slug');
            $table->integer('director_id')->default(NULL)->change();
            $table->text('content')->default('NULL')->change();
            $table->string('tags', 191)->default('NULL')->change();
            $table->string('thumbnail', 191)->default('NULL')->change();
        });
    }
}
