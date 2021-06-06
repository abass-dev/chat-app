<?php

 use App\OAuth\UsersOAuth;
 // Import auto loader of composer
require dirname(__DIR__)."/vendor/autoload.php";

$authUser = new UsersOAuth();

if ($authUser->isSafeUser("login")) {
  $authUser->isSafeLogin();
}

if ($authUser->isSafeUser("register")) {
   $authUser->isSafeRegister();
}

if (is_array($authUser->getErrors())) {
    $errors = $authUser->getErrors();
    
} else if (is_array($authUser->getSuccess())) {
    $success = $authUser->getSuccess();
}

?>
<?php require "../template/header.php" ?>

 <!-- Import base template -->
<?php require("../template/base.php") ?>

 <!-- Import footer.php from template -->
<?php require "../template/footer.php" ?>
