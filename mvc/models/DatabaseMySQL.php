<?php

class Database extends mysqli{

    private $dbuser;
    private $dbpwd;
    private $dbhost;
    private $dbname;

    function __construct($dbuser, $dbpwd, $dbhost, $dbname){
        
        $this->dbuser = $dbuser;
        $this->dbpwd = $dbpwd;
        $this->dbhost = $dbhost;
        $this->dbname = $dbname;

        parent::__construct($this->dbhost, $this->dbuser, $this->dbpwd, $this->dbname);
        
        if (mysqli_connect_error()) {
            exit('Não foi possivel conectar no banco de dados (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
        }
    }

    public function __clone(){
        trigger_error('Clone is not allowed.', E_USER_ERROR);
    }
    public function __wakeup(){
        trigger_error('Deserializing is not allowed.', E_USER_ERROR);
    }

    public function executeQuery($query){
        if($this->query($query) === TRUE){
            return true;
        }
    }

    public function getRowResult($query){
        $result = $this->query($query);
        
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            return $row;
        }else{
            return null;
        }
    }

    public function getAllResults($query){
        $result = $this->query($query);
        
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $all[] = $row;
            }            
            return $all;
        }else{
            return null;
        }
    }


    public function setDbUser($user){
        $this->dbuser = $user;
    }

    public function getDbUser(){
        return $this->dbuser;
    }


    public function setDbPwd($pwd){
        $this->dbpwd = $pwd;
    }

    public function getDbPwd(){
        return $this->dbpwd;
    }


    public function setDbHost($host){
        $this->dbhost = $host;
    }

    public function getDbHost(){
        return $this->dbhost;
    }


    public function setDbName($name){
        $this->dbname = $name;
    }

    public function getDbName(){
        return $this->dbname;
    }
}