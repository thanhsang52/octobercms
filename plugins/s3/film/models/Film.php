<?php namespace S3\Film\Models;

use Model;

/**
 * Model
 */
class Film extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 's3_film_films';
    public $belongsTo=[
        'director' => 'S3\Film\Models\Director'
    ];
    public $belongsToMany=[
        'categories' => [
            'S3\Film\Models\Category',
            'table'     => 's3_film_categories_films'
        ]
    ];
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
