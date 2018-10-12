<?php

class Erro extends Controller{
    function __construct($id){
        parent::__construct();
        $this->callError($id);
    }

    public function callError($id){
        $path = new Path();

        if($id == 1){
            $this->view->msg = "Página não encontrada";
            $this->view->render("erro/404");
        }
    }
}