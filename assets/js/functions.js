function isValidEmail(email) {
    // Regular expression for a basic email validation
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}


function validatePassword(password) {
    // Minimum length requirement
    if (password.length < 8) {
        $('#num-error').text("Password must be 8 characters long")
      return false;
    }

    // Check for at least one uppercase letter
    if (!/[A-Z]/.test(password)) {
      $('#num-error').text("Password must contain 1 uppercase letter")
      return false;
    }

    // Check for at least one lowercase letter
    if (!/[a-z]/.test(password)) {
        $('#num-error').text("Password must contain 1 lowercase letter")
      return false;
    }

    // Check for at least one digit
    if (!/\d/.test(password)) {
      $('#num-error').text("Password must contain at least a number")
      return false;
    }

    // Check for at least one special character
    if (!/[!@#$%^&*(),.?":{}|<>]/.test(password)) {
      $('#num-error').text("Password must contain at least a symbol")

      return false;
    }

    // If all checks pass, the password is considered secure
    return true;
}