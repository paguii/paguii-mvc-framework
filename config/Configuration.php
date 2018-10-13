<?php

class Configuration {

    public $pathLibs;
    public $pathModels;
    public $pathViews;
    public $pathControllers;

    public $dbhost;
    public $dbname;
    public $dbuser;
    public $dbpwd;

    public function __construct(){
        #Define aonde fica os componentes
        $this->pathLibs = "libs/";
        $this->pathModels = "mvc/models/";
        $this->pathViews = "mvc/views/";
        $this->pathControllers = "mvc/controllers/";

        #Define configuração de banco
        $this->dbhost = "#####";
        $this->dbname = "#####";
        $this->dbuser = "#####";
        $this->dbpwd = "#####";
    }
}