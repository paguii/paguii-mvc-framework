<?php

class Bootstrap{

    function __construct(){
        $path = new Path();

        $url = $_GET['url'];
        $url = rtrim($url, "/");
        $url = explode("/", $url);
        
        if(strlen($url[0]) <= 0){
            $url[0] = "index";
        }

        $file = $path->pathControllers . $url[0] . '.php';

        if(file_exists($file)){
            require_once($file);
        }else{            
            $this->error(1);
            return false;
        }      

        $controller = new $url[0]();

        if(isset($url[2])){
            $parametros = array();

            for($i=2; $i < count($url); $i++){
                $parametros[] = $url[$i];
            }
            
            $controller->{$url[1]}($parametros);

        }else{
            if(isset($url[1]) && strlen($url[1]) > 0){
                if(method_exists($controller, $url[1])){
                    $controller->{$url[1]}();

                }else{
                    $this->error(1);
                    return false;
                }
            }else{
                if(method_exists($controller, "index")){
                    $controller->index();

                }else{
                    $this->error(1);
                    return false;
                }
            }
        }
    }

    public function error($id){
        $path = new Path();

        require_once($path->pathControllers."erro.php");
        $controller = new Erro($id);
    }
}