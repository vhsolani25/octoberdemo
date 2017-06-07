<?php namespace Cygnet\Category\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCygnetCategory extends Migration
{
    public function up()
    {
        Schema::table('cygnet_category_', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('cygnet_category_', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
