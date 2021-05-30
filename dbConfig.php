<?php

class dbConfig {
  private $host = "localhost";
  private $user = "root";
  private $dbname = "messager";
  private $password = "1524";
  
  private $conn = null;
  
  
  public function dbConnect() {
     
  try {
   $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->user, $this->password);
  
  } catch (PDOExeception $e) {
    echo $e->getMessage();
  }
 return $this->conn;
 }
 
 public function findAll(?string $tableName = "users") {
   return $this->dbConnect()->query("SELECT * FROM $tableName");
 }

}