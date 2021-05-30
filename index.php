<?php
require "db.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=none">
    <link rel="stylesheet" href="css/style.css" />
    <title>Chat App</title>
  </head>
  <body>
    <div class="app">
     <h1 class="app-title">Chat App</h1>
     <h3 class="login-title">Log In</h3>
     <form action="#" method="post">
      <div class="input-group">
        <label for="email">Email:</label>
        <input placeholder="Your Email Address" type="email" name="email" id="email" />
      </div>
      <div class="input-group">
        <label for="password">password:</label>
        <input placeholder="Your Password" type="password" name="password" id="password" />
      </div>
      <button name="login" class="btn-submit" type="submit">Log in</button>
    </form>
    </div>
  </body>
</html>