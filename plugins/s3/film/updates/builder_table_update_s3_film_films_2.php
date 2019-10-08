<?php namespace S3\Film\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateS3FilmFilms2 extends Migration
{
    public function up()
    {
        Schema::table('s3_film_films', function($table)
        {
            $table->string('tags')->nullable();
            $table->string('thumbnail')->nullable();
            $table->integer('director_id')->default(0)->change();
            $table->text('content')->default('null')->change();
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('s3_film_films', function($table)
        {
            $table->dropColumn('tags');
            $table->dropColumn('thumbnail');
            $table->integer('director_id')->default(NULL)->change();
            $table->text('content')->default('NULL')->change();
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
