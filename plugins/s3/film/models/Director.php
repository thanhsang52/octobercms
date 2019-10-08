<?php namespace S3\Film\Models;

use Model;

/**
 * Model
 */
class Director extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 's3_film_directors';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
