<?php

$path = dirname(__DIR__);
$separator = DIRECTORY_SEPARATOR;

 // Import auto loader of composer
require $path.$separator."vendor".$separator."autoload.php";

use App\Repo\UsersRepo;

 /**
  * Overwrite the database configuration
  * For more information on this subject, see the src/Config/DB.php class
  */
 $devDbConfig = $path.$separator."src".$separator."Config".$separator."DB.php";
 $dbConfigTextFile = $path.$separator."docs".$separator."dbConfig.txt";

/* Create a new Class DB.php if doesn't exist */
if (!file_exists($devDbConfig)) {
   file_put_contents($devDbConfig, file_get_contents($dbConfigTextFile));
} else {
  $db = new UsersRepo();
}

?>

<!-- Import header.php from template -->
<?php require "../template/header.php" ?>

<!-- Import main.php from template -->
<?php require "../template/main.php" ?>

 <!-- Import footer.php from template -->
<?php require "../template/footer.php" ?>