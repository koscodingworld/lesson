<?php

namespace model;

class Db {

    private $dbType = 'mysql';
    private $host = 'localhost';
    private $name = 'test';
    private $username = 'root';
    private $password = 'root';
    private $dsn;
    
    public function __construct(){
        $dsnText = $this->dbType . "host=" . $host . ";dbname=" . $dbName;
        $this->dsn = new PDO($dsnText, $this->username, $this->password);
    }
    
    public static function connect(){
        return $this->dsn;
    }
}
