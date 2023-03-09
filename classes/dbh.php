<?php

class Dbh
{
    private $dbServername = "localhost";
    private $dbUsername = "root";
    private $dbPassword = "";
    private $dbName = "dbdziekanat";

    protected function connect(){
        try {
        $dsn = 'mysql:host='. $this->dbServername .';dbname=' . $this->dbName;
        $pdo = new PDO($dsn, $this->dbUsername, $this->dbPassword);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
        }
        catch(PDOException $e) {
        echo "Error: ".$e->getMessage()."<br/>";
        die();
        }
    }
}