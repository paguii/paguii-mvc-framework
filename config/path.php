<?php

class Path {

    public $pathLibs;
    public $pathModels;
    public $pathViews;
    public $pathControllers;

    public function __construct(){
        #Define aonde fica os componentes
        $this->pathLibs = "libs/";
        $this->pathModels = "mvc/models/";
        $this->pathViews = "mvc/views/";
        $this->pathControllers = "mvc/controllers/";
    }
}