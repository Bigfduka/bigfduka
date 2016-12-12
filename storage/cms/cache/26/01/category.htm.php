<?php 
use ad\amadeus\models\Movie;class Cms584ea831db064803766890_145401891Class extends \Cms\Classes\PageCode
{

public function onStart(){
    $films = Movie::get();
    
    $this['films'] = $films;
    
    }
}
