<?php

class View{
    
    protected $config;

    function __construct(){
        $this->config = new Configuration();
    }

    public function render($name){        
        require_once($this->config->pathViews.$name.".php");
    }
}