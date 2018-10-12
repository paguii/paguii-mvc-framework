<?php

class View{
    function __construct(){

    }

    public function render($name){
        $path = new Path();
        require_once($path->pathViews.$name.".php");
    }
}