<?php namespace Cygnet\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCygnetProducts extends Migration
{
    public function up()
    {
        Schema::table('cygnet_products_', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('cygnet_products_', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
