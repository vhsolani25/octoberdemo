<?php namespace Cygnet\Post;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return ["Cygnet\Post\Components\Sidebarmenu"=>'sidebarmenu'];
    }

    public function registerSettings()
    {
    }
}
