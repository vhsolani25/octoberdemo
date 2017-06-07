<?php namespace Cygnet\Products\Models;

use Model;
use Cygnet\Category\Models\Category;

/**
 * Model
 */
class Product extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'cygnet_products_';

    public function listcategory()
    {
        $fields = Category::lists('category_name','id'); 
       return $fields;
    }
}