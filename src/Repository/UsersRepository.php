<?php

namespace App\Repository;
use App\Config\DBConfig;

class UsersRepository extends DBConfig {

  private $connSafeUser;
  public $errors = [];

  public function findOneUser($user) {
    if ($user != null && $user != "") {
      $db = DBConfig::DBConn();
      $query = $db->query("SELECT * FROM `users` WHERE `email`='$user' LIMIT 1");

      $logAUser = $query->fetch();
      if ($logAUser) {
        return $logAUser;
      } else {
        return $this->errors["errors"] = "ERRORS: invalid credentials";

      }
    }
  }
}