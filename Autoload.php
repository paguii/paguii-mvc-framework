<?php

require_once("config/path.php");

class Autoload {
    public function __construct(){
        $path = new Path();

        #Carrega os componentes na aplicação
        $libs = scandir($path->pathLibs);
        for($i=2; $i < count($libs); $i++){
            require_once($path->pathLibs.$libs[$i]);
        }

        #Carrega todos os models
        $models = scandir($path->pathModels);
        for($i=2; $i < count($models); $i++){
            require_once($path->pathModels.$models[$i]);
        }
    }
}