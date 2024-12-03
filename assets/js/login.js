$(document).ready(function () {
    $('#btnToggle, #btnCToggle').click(function() {
        var passwordField = $(this).siblings('.showhide-pass');
        var icon = $(this).find('i');
    
        // Toggle password visibility
        if (passwordField.attr('type') === 'password') {
          passwordField.attr('type', 'text');
          icon.removeClass('fa-eye').addClass('fa-eye-slash');
        } else {
          passwordField.attr('type', 'password');
          icon.removeClass('fa-eye-slash').addClass('fa-eye');
        }
    });

    $('#login-form').submit(function(event) {
        event.preventDefault();
        // console.log(event)

        var email = $('#email').val();
        var password = $('#pass-1').val();
        var isValidPassword = validatePassword(password)

     

        if(email ==''){
            $('#email').addClass('is-invalid')
            $('#talkBackText').html('Asterik (*) indicates requires fields');
            setTimeout(() => {
                $('#talkBackText').html('')
            }, 3000);

        }else if (!isValidEmail(email)) {
            $('#email').addClass('is-invalid')
            $('#talkBackText').html('Asterik (*) indicates requires fields');
            setTimeout(() => {
                $('#talkBackText').html('')
            }, 3000);
        }else if(!isValidPassword){
            $('#pass-1').addClass('is-invalid')
        }else {
            var formData = {
                
                email: $('#email').val(),
                password: $('#pass-1').val(),
          
                // Assuming 'iti' is already initialized
            };
        
            // Perform AJAX request
            $.ajax({
                type: 'POST',
                url: 'api/userLogin.php',
                data: formData,
                success: function(response) {
                    // Handle success response
                    console.log(response)
                    response = $.parseJSON(response)
                    if(response.status =="success"){ 
                        $('.account__header').hide();
                        $('#login-form').html(`<p class="text-success">Logged in successfully. Redirecting... </p>`); // Display success message
                        setTimeout(function(){
                            location.replace('tradeshrine');
                        }, 500)

                    }else{
                        $('#talkBackText').text(response.message)
                    }
                },
                error: function(error) {
                    // Handle error response
                    $('#talkBackText').html('Error: ' + error.responseText); // Display error message
                }
            })
        }
    
        
    });
});