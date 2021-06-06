<?php
namespace App\OAuth;
session_start();

use App\Repository\UsersRepository;

class UsersOAuth {

  public $userRepo;
  public $pageLoader;
  private $getSuccess;
  private $getErrors;
  
  public function __construct () {

    $this->userRepo = new UsersRepository();
    $this->getSuccess = [];
    $this->getErrors = [];
  }

  public function isSafeLogin() {

    $loginEmail = htmlspecialchars($_POST["loginEmail"]);
    $loginpass = htmlspecialchars($_POST["loginPass"]);
    if (!empty($loginEmail) && $loginEmail != " ") {
      if (!empty($loginpass) && $loginpass != " ") {
        $loginEmail = $loginEmail;
        $loginpass = $loginpass;

        $dbUser = $this->userRepo->findOneUser($loginEmail);

        if (isset($dbUser["email"]) && isset($dbUser["password"])) {
      
          if ($loginEmail == $dbUser["email"]) {
            if (password_verify($loginpass, $dbUser["password"])) {
              $this->userRepo->success["success"] = "Logged in successfully !";
              $this->pageLoader = true;
              
              $_SESSION["safeuserid"] = $dbUser["id"];
              $_SESSION["safeusername"] = $dbUser["username"];
              $_SESSION["safeuseremail"] = $dbUser["email"];
              
            } else {
              $this->pageLoader = false;
              $this->userRepo->errors["errors"] = "ERRORS: Invalid credentials";
            }
          } else {
              $this->pageLoader = false;
              $this->userRepo->errors["errors"] = "ERRORS: Invalid credentials";
          }
        }
      }
    }

  }
  
  public function isSafeRegister () {
   $newUser = array(
     "name" => htmlspecialchars($_POST["registername"]),
     "email" => htmlspecialchars($_POST["registeremail"]),
     "pass" => htmlspecialchars($_POST["registerpass"]),
     "repeatpass" => htmlspecialchars($_POST["registerrepeatpass"])
    );
    
   if($this->userRepo->isUser($newUser["email"])) {
       return  $this->getErrors["errors"] = "Email already exists!";
       
      }else if (isset($newUser["email"]) && $newUser["email"] != " ") {
        if (isset($newUser["name"]) && strlen($newUser["name"]) >= 3) {
         if (strlen($newUser["email"]) > 5 && strpos($newUser["email"], "@")  && strpos($newUser["email"], ".")) {
          if (isset($newUser["pass"]) && strlen($newUser["pass"]) >= 6) {
            if ($newUser["pass"] === $newUser["repeatpass"]) {
             
              $newName = $newUser["name"];
              $newEmail = $newUser["email"];
              $newPass = password_hash($newUser["pass"], PASSWORD_DEFAULT);
              
              $this->userRepo->addNewUser($newName, $newEmail, $newPass);
              $this->getSuccess["success"] = "Your account was created successfully !";
               }else{
                  $this->getErrors["errors"] = "Pass and repeat pass are not equal";
                  }
          }else{
             $this->getErrors["errors"] = "Bad password length";
          }
      }else{
         $this->getErrors["errors"] = "Invalid email address";
       }
    }else {
        $this->getErrors["errors"] = "Your name is too short";
    }
  }
      
 }
  
  public function getSuccess(){
    if(count($this->getSuccess) > 0) {
      return $this->getSuccess;
    } else {
      return false;
    }
    
  }
  
  public function getErrors(){
    if(count($this->getErrors) > 0) {
      return $this->getErrors;
    } else {
      return false;
    }
    
  }
  
  public function isSafeUser ($safeForm) {
     if (isset($_POST[$safeForm])) {
       return $safeForm;
      }
  }
  
}

