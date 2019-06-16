<?php

class Db {

    private $dbType = 'mysql';
    private $host = 'localhost';
    private $name = 'ticket';
    private $username = 'root';
    private $password = 'root';

    public function __construct() {
        $dbConfig = file_get_contents("../config/db_config.json");
        $dbConfig = json_decode($dbConfig);
        $this->dbType = $dbConfig->dbType;
        $this->host = $dbConfig->host;
        $this->name = $dbConfig->name;
        $this->username = $dbConfig->username;
        $this->password = $dbConfig->password;
    }

    public function connect() {
        $dsnText = $this->dbType . ":host=" . $this->host . ";dbname=" . $this->name;
        $pdo = new PDO($dsnText, $this->username, $this->password);
        return $pdo;
    }

}
