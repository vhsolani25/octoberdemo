<?php namespace Cygnet\Post\Models;

use Model;
use Cygnet\Products\Models\Product;
use Cygnet\Category\Models\Category;

/**
 * Model
 */
class Post extends Model
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
    public $table = 'cygnet_post_';

    public function listpost()
    {  
          
       $fields =  $this->lists('post_title','id'); 
       $fields[0]='No Parent';
       ksort($fields);
          
       return $fields;
    }

    public function listproducts()
    {
       $fields = Product::lists('product_name','id'); 
       return $fields;
    }

    public function listcategory()
    {
        $fields = Category::lists('category_name','id'); 
       return $fields;
    }
}