<?php

namespace App\Repo;
use App\Config\DB;

class UsersRepo extends DB
{
  public function __construct()
  {
    parent::__construct();
  }
  
  public function findAll()
  {
    return $this->dBConn()->query("SELECT * FROM users");
  }
  
}