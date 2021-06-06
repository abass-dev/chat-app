<?php

namespace App\Repository;
use App\Config\DBConfig;

class UsersRepository extends DBConfig {

  public $success = [];
  public $errors = [];
  private $db;
  
  public function getDb(): \PDO
  {
   return $this->db = DBConfig::DBConn();
  }
  
  public function findOneUser($user) {
    if ($user != null && $user != " ") {
      $query = $this->getDb()->query("SELECT * FROM `users` WHERE `email`='$user' LIMIT 1");
      $logAUser = $query->fetch();
      if ($logAUser) {
        return $logAUser;
      } else {
        return $this->errors["errors"] = "ERRORS: invalid credentials";
      }
    }
  }
  
  public function isUser($userEmail) {
  
    if ($userEmail != null && $userEmail != " ") {
      $query = $this->getDb()->query("SELECT COUNT(*) FROM `users` WHERE `email`='$userEmail' LIMIT 1");
      
      if($query->fetchColumn() != 0){
        return true;
      } else {
        return false;
      }
    }
  }
  
  public function addNewUser($newUserName, $newUseEmail, $newUserPass) {
    $query = $this->getDb()->prepare("INSERT INTO users(username, email, password)VALUES(:name, :email, :pass)");
    $query->execute([
                     ":name"   => $newUserName,
                     ":email"  => $newUseEmail,
                     ":pass"   => $newUserPass
                   ]);
  }
}