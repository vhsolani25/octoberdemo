<?php namespace Cygnet\Category\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCygnetCategory extends Migration
{
    public function up()
    {
        Schema::create('cygnet_category_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('category_name', 300);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cygnet_category_');
    }
}
