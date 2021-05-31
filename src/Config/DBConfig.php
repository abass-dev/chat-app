<?php

namespace App\Config;

/**
 * Connection to the database
 */
class DBConfig
{
  public $host;
  private $user;
  private $dbname;
  private $password;
  private $query;
  private $conn = null;
  
  /**
   * 
   */
  public function __construct(string $user, string $dbname, ?string $password = null)
  {
    $this->host = "127.0.0.1";
    $this->user = $user;
    $this->dbname = $dbname;
    $this->password = $password;
    
  }
  
  public function dBConn() {
    
    try {
      $cdn = "mysql:host=".$this->host.";dbname=".$this->dbname; 
      $this->conn = new \PDO($cdn, $this->user, $this->password, [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
        ]);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
    
    return $this->conn;
  }
  
}