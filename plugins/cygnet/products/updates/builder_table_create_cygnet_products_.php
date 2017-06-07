<?php namespace Cygnet\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCygnetProducts extends Migration
{
    public function up()
    {
        Schema::create('cygnet_products_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('product_name', 250);
            $table->integer('category_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cygnet_products_');
    }
}
