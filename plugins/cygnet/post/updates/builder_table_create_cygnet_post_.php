<?php namespace Cygnet\Post\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCygnetPost extends Migration
{
    public function up()
    {
        Schema::create('cygnet_post_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('post_title', 500);
            $table->text('post_description');
            $table->integer('parent')->default(0);
            $table->decimal('order', 10, 2)->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cygnet_post_');
    }
}
