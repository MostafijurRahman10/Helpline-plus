<?php

class Connection{
    
    private $con;
    
    public function __construct() {
        require 'config.php';
        $this->con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DATABASE);
    }
    
    public function getConnection(){
        return $this->con;
    }
    
    public function endConnection(){
        $this->con = null;
    }
}


?>