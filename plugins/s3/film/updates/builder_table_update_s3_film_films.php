<?php namespace S3\Film\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateS3FilmFilms extends Migration
{
    public function up()
    {
        Schema::table('s3_film_films', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('director_id')->default(0)->change();
            $table->text('content')->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('s3_film_films', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->integer('director_id')->default(NULL)->change();
            $table->text('content')->default('NULL')->change();
        });
    }
}
