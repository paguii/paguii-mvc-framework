<?php

require_once("config/Configuration.php");

class Autoload {
    
    protected $config;

    public function __construct(){
        $this->config = new Configuration();

        #Carrega os componentes na aplicação
        $libs = scandir($this->config->pathLibs);
        for($i=2; $i < count($libs); $i++){
            require_once($this->config->pathLibs.$libs[$i]);
        }

        #Carrega todos os models
        $models = scandir($this->config->pathModels);
        for($i=2; $i < count($models); $i++){
            require_once($this->config->pathModels.$models[$i]);
        }
    }
}