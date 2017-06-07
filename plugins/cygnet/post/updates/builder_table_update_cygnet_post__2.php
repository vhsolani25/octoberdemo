<?php namespace Cygnet\Post\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCygnetPost2 extends Migration
{
    public function up()
    {
        Schema::table('cygnet_post_', function($table)
        {
            $table->integer('category_id');
        });
    }
    
    public function down()
    {
        Schema::table('cygnet_post_', function($table)
        {
            $table->dropColumn('category_id');
        });
    }
}
