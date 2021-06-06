<?php 
if (is_array($authUser->getErrors())) {
    $errors = $authUser->getErrors();
    
} else if (is_array($authUser->getSuccess())) {
    $success = $authUser->getSuccess();
}

?>
<div class="register">
  <form action="#" method="post" class="form" novalidate >
    <div class="card-form">
      <div class="form-register">
    <h3>CREATE NEW ACCOUNT</h3><hr />
    
      <?php if(isset($errors["errors"])){ ?> 
      <div class="errors-color"><?= $errors["errors"] ?></div>
      <?php } ?>
      
      <?php if(isset($success["success"])){ ?> 
      <div class="success-color"><?= $success["success"] ?></div>
      <?php } ?>
      
    <div class="input-group">
      <label for="registername">First name:</label>
      <input placeholder="Your name" type="text" name="registername" id="registername" />
    </div>
    <div class="input-group">
      
      <label for="email">Email:</label>
      <input placeholder="Your Email Address" type="email" name="registeremail" id="registeremail" />
    </div>
    <div class="input-group">
      <label for="registerpass">Password:</label>
      <input placeholder="Your Password" type="password" name="registerpass" id="registerpass" />
    </div>
    <div class="input-group">
      <label for="repeatregisterpass">Repeat-password:</label>
      <input placeholder="Repeat Password" type="password" name="registerrepeatpass" id="registerrepeatpass" />
    </div>
    </div>
    <button name="register" class="btn-register" type="submit">Create my account</button>
    <div class="have-account">
    <a id="haveAccount" href="#">Already have an account?</a>
    </div>
  </div>
  </form>
</div>