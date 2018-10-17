<?php

class View{
    
    protected $config;
    protected $section;

    function __construct(){
        $this->config = new Configuration();
    }

    public function render($name){        
        require_once($this->config->pathViews.$name.".php");
    }

    public function layout($name){
        require_once($this->config->pathViews.$name.".php");
    }

    public function section($name){
        echo $this->section[$name];
    }

    public function start(){
        ob_start();
    }
    
    public function stop($name){
        $this->section[$name] = ob_get_clean();
    }
}