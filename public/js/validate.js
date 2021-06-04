function validLogin() {
    let loginForm = document.loginForm;
    
    let validEmail = document.loginForm.loginEmail;
    let validPass = document.loginForm.loginPass;
    
    let emailErrors = document.querySelector(".email-errors");
    let passErrors = document.querySelector(".pass-errors");
    
    const atpos = validEmail.value.indexOf("@");
    const dotpos = validEmail.value.lastIndexOf(".");
    
         
    if (atpos < 1 || ( dotpos - atpos < 2 )) {
      emailErrors.textContent = "ERROR: Email Invalid";
      loginEmail.classList.add("errors-border");
      emailErrors.classList.add("errors");
      validEmail.focus() ;
      return false;
    }
    
    
    
    if (validPass.value == "" || validPass.value.length <= 5) {
      passErrors.textContent = "ERROR: Incorrect password";
      loginPass.classList.add("errors-border");
      passErrors.classList.add("errors");
      validPass.focus();
      return false;
      
    }
}