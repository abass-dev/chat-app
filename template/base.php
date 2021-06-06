<div class="base" id="base">
  <div class="app">
    <h1 class="app-title">Chat App</h1>
     <div id="appCore">
       <?php
       
       if(!isset($_SESSION["safeuseremail"])) {
           require_once("login.php");
          } 

       ?>
     </div>
 </div>
</div>