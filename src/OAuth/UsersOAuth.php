<?php

namespace App\OAuth;

use App\Repository\UsersRepository;

class UsersOAuth {

  public $userRepo;
  
  public function __construct () {

    $this->userRepo = new UsersRepository();

  }

  public function isSafe() {

    $loginEmail = htmlspecialchars($_POST["loginEmail"]);
    $loginpass = htmlspecialchars($_POST["loginPass"]);
    if (!empty($loginEmail) && $loginEmail != " ") {
      if (!empty($loginpass) && $loginpass != " ") {
        $loginEmail = $loginEmail;
        $loginpass = $loginpass;

        $dbUser = $this->userRepo->findOneUser($loginEmail);

        if (isset($dbUser["email"]) && isset($dbUser["password"])) {
          $dbUserEmail = $dbUser["email"];
          $dbUserPass = $dbUser["password"];
          if ($loginEmail === $dbUserEmail) {
            if ($loginpass === $dbUserPass) {
              $this->userRepo->success["success"] = "Logged in successfully";
              
            } else {
              $this->userRepo->errors["errors"] = "ERRORS: Password Incorrect";
            }
          } else {
              $this->userRepo->errors["errors"] = "ERRORS: Email Incorrect";
          }
        }
      }
    }

  }
  
  public function isSafeUser ($safeForm) 
  {
     if (isset($_POST[$safeForm])) {
       return $safeForm;
      }
  }
  
}