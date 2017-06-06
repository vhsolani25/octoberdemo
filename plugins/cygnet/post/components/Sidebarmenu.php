<?php namespace Cygnet\Post\Components;

use Cms\Classes\ComponentBase;
use Cygnet\Post\Models\Post;

class Sidebarmenu extends ComponentBase
{
    
    public function componentDetails()
    {
        return [
            'name'        => 'sidebarmenu Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    public $actors;

    public function init()
    {

    }
    public function onRun()
    {
        $this->actors=$this->loadpostData();
        //$this->actors="<h1>test</h1>";

    }

    protected function loadpostData()
    {
        $htmldata="";
        $data = Post::all()->where('parent',0);
        foreach ($data as $datas) {
            echo '<ul>';
                echo '<li>' . $datas->post_title;
                $htmldata.=$this->show_subcategory($datas->id,$datachild="");
                echo '</li>';
            
            echo '</ul>';
        }
    }

    public function show_subcategory($category_id,$datachild){
       
        $data = Post::all()->where('parent',$category_id);
        if(!empty($data))
        {
            foreach ($data as $datas) {
                echo '<ul>';
                    echo '<li>' . $datas->post_title;
                        self::show_subcategory($datas->id,$childdata="");
                    echo '</li>';
               echo '</ul>';
                
            }
        }
       
    }

    
}
