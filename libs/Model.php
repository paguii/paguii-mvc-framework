<?php 

class Model {
    
    protected $config;
    protected $db;

    function __construct(){
        $this->config = new Configuration();
        $this->db = new Database($this->config->dbuser, $this->config->dbpwd, $this->config->dbhost, $this->config->dbname);
    }
}