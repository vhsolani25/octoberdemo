<?php namespace Cygnet\Post\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCygnetPost extends Migration
{
    public function up()
    {
        Schema::table('cygnet_post_', function($table)
        {
            $table->integer('product_id');
        });
    }
    
    public function down()
    {
        Schema::table('cygnet_post_', function($table)
        {
            $table->dropColumn('product_id');
        });
    }
}
