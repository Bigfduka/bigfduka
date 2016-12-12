<?php 
use ad\amadeus\models\Movie;class Cms584eaed741ffd902735074_3931437862Class extends \Cms\Classes\PageCode
{

public function onStart(){
    $films = Movie::get();
    
    $this['films'] = $films;
    
    }
}
