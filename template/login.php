<div class="login">
  <form name="loginForm" action="#" method="post" class="form" novalidate  onsubmit="return(validLogin());">
    <div class="card-form">
      <div class="form-login">
    <h3>LOGIN</h3><hr />
    <div style="color:red" class="errors">
      <?php if(isset($userRepo->errors["errors"])){ ?>
     <?php echo $userRepo->errors["errors"]?>
    <?php } ?>
    </div>
    <div class="input-group">
      <label class="email-errors" for="loginEmail">Email:</label>
      <input placeholder="Your Email Address" type="email" name="loginEmail" id="loginEmail" />
    </div>
    <div class="input-group">
      <label class="pass-errors" for="loginPass">password:</label>
      <input placeholder="Your Password" type="password" name="loginPass" id="loginPass" />
    </div>
    </div>
    <button id="btnLogin" name="login" class="btn-submit" type="submit">Log in</button>
    <div class="forget-pass">
    <a href="#">Forget password?</a>
    </div>
    <div class="or">OR</div>
    <div class="new-account"><a href="#" class="btn-new-account">Create new account</a></div>
  </div>
  </form>
</div>