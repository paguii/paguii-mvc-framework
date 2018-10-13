<?php

class Index extends Controller{
    function __construct() {
        parent::__construct();
    }

    public function index($arg = false){    
        $exemplo = new ExemploModel();
        $exemplo->exemplo();
        $this->view->render("index/index");
    }
}