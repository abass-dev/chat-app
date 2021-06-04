<?php

namespace App\Config;

use Dotenv\Dotenv;
/**
 * Connection to the database
 */
class DBConfig
{
  public static function DBConn() {
    
    /**
     * PHPDotenv required .env directory 
     */
    $envdir = dirname(dirname(__DIR__));

    /**
     * If the configuration file exists we try to connect to the database
     * If it does not exist an exception of type PDOException will be thrown
     */
    if (file_exists($envdir."/.env")) {
    
      $dotenv  = Dotenv::createImmutable(dirname(dirname(__DIR__)));
      $dotenv->load();

      $host = $_ENV["DB_HOST"];
      $user = $_ENV["DB_USER"];
      $dbname = $_ENV["DB_NAME"];
      $password = $_ENV["DB_PASSWORD"];
 try {
      $cdn = "mysql:host=".$host.";dbname=".$dbname.";"; 
      $conn = new \PDO($cdn, $user, $password, [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
        ]);
    } catch (\PDOException $e) {
      die($e->getMessage());
    }
    
    return $conn;
  }
}
  
}