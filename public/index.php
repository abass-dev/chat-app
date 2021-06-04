<?php

 use App\Repository\UsersRepository;
 //use App\Auth\UsersLoginAuthentication;
 // Import auto loader of composer
require dirname(__DIR__)."/vendor/autoload.php";


if (isset($_POST['login'])) {
    $loginEmail = htmlspecialchars($_POST["loginEmail"]);
    $loginpass = htmlspecialchars($_POST["loginPass"]);
    if (!empty($loginEmail) && $loginEmail != " ") {
      if (!empty($loginpass) && $loginpass != " ") {
        $loginEmail = $loginEmail;
        $loginpass = $loginpass;
        $userRepo = new UsersRepository();
        $dbUser = $userRepo->findOneUser($loginEmail);
        if (isset($dbUser["email"]) && isset($dbUser["password"])) {
        $dbUserEmail = $dbUser["email"];
        $dbUserPass = $dbUser["password"];
        if ($loginEmail === $dbUserEmail) {
           if ($loginpass === $dbUserPass) {
             echo "Logged in successfully";
           }
        }
        }
      }
    }
}
?>
<?php require "../template/header.php" ?>

 <!-- Import base template -->
<?php require("../template/base.php") ?>

 <!-- Import footer.php from template -->
<?php require "../template/footer.php" ?>