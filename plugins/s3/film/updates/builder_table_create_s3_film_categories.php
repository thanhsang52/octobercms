<?php namespace S3\Film\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateS3FilmCategories extends Migration
{
    public function up()
    {
        Schema::create('s3_film_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->integer('parent_id')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('nest_left')->nullable();
            $table->integer('nest_right')->nullable();
            $table->integer('nest_depth')->nullable();
            //$table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('s3_film_categories');
    }
}
