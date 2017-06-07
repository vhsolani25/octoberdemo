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
        

    }

    protected function loadpostData()
    {
        $category = $this->param('category');
        $category=(int)$category;
        $htmldata="";
        if(!empty($category) && $category!=0)
        {
            
            $data = Post::all()->where('parent',0)->where('category_id',$category);
        }
        else{
            $data = Post::all()->where('parent',0);
        }
            foreach ($data as $datas) {
                echo '<ul>';
                    echo '<li><a href="/post-description/'.$datas->id.'">' . $datas->post_title;
                    $htmldata.=$this->show_subcategory($datas->id,$datachild="");
                    echo '</a></li>';
                
                echo '</ul>';
            }
    }

    public function show_subcategory($parent_id,$datachild){
        $category = $this->param('category');
        $category=(int)$category;
        if(!empty($category) && $category!=0 )
        {
            $data = Post::all()->where('parent',$parent_id)->where('category_id',$category);
        }
        else{
            $data = Post::all()->where('parent',$parent_id);
        }
        if(!empty($data))
        {
            foreach ($data as $datas) {
                echo '<ul>';
                    echo '<li><a href="/post-description/'.$datas->id.'">' . $datas->post_title;
                        self::show_subcategory($datas->id,$childdata="");
                    echo '</a></li>';
               echo '</ul>';
                
            }
        }
       
    }
}
