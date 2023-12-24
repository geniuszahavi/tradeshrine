// ===================eyeIcon========================== //
function togglePasswordVisibility() {
    var passwordInput = document.getElementById("account-pass");
    var eyeIcon = document.getElementById("eyeIcon");
         

    eyeIcon.onclick = function(){
        console.log('helo world');
        
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeIcon.classList.remove("fa-eye");
        eyeIcon.classList.add("fa-eye-slash");
      } else {
        passwordInput.type = "password";
        eyeIcon.classList.remove("fa-eye-slash");
        eyeIcon.classList.add("fa-eye");
      }
    }
  }

  togglePasswordVisibility();