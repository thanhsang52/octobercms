<?php namespace S3\Film\Models;

use Model;

/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\NestedTree;

    /**
     * @var string The database table used by the model.
     */
    public $table = 's3_film_categories';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required|unique:s3_film_categories,name',
        'slug' => 'required|unique:s3_film_categories,slug'
    ];
    public $customMessages = [
        'name.required' => 'Name is required!',
        'name.unique' => 'Name must be unique'
    ];
}
