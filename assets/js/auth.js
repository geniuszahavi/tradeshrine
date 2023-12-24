// $.noConflict();

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

    $('#phone').on('input', function() {
        // Get the current value of the input
        var inputValue = $(this).val();
    
        // Check if the input starts with a zero
        if (inputValue.startsWith('0')) {
          // Remove the leading zero
          inputValue = inputValue.substring(1);
    
          // Update the input field with the modified value
          $(this).val(inputValue);
        }
    });


    var inputElement = document.getElementById('phone');
    var iti = window.intlTelInput(inputElement, {
    initialCountry: 'us',
    separateDialCode: true,
    nationalMode: true,
    utilsScript: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js',
    });

    // Attach click event to the iti container and delegate to li elements
    $(iti.container).on('click', 'li', function() {
        // Access the data attributes of the selected item
        var dialCode = $(this).data('dial-code');
        var countryCode = $(this).data('country-code');
        var countryName = $(this).find('.iti__country-name').text();

        // Log or use the values as needed
        console.log('Dial Code:', dialCode);
        console.log('Country Code:', countryCode);
        console.log('Country Name:', countryName);
    });

      // Function to handle form submission
      $('#registration-form').submit(function(event) {
        event.preventDefault();

        var firstName = $('#first-name').val();
        var lastName = $('#last-name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var password = $('#pass-1').val();
        var isValidPassword = validatePassword(password)
        
        var countryName = iti.selectedCountryData.name
        var countryCode = iti.selectedCountryData.dialCode
        // var countryName = iti.getSelectedCountryData().name;  // Get the selected country name

        // Use countryCode and phoneNumber as needed (e.g., send them through AJAX)

        // console.log('Country Code:', iti.getSelectedCountryData().dialCode);

        if(firstName ==''){
            $('#first-name').addClass('is-invalid')
            $('#talkBackText').html('Asterik (*) indicates requires fields');

        }else if(firstName.length < 2){
            $('#first-name').addClass('is-invalid')
            $('#talkBackText').html('Name too short.');
        }if(lastName ==''){
            $('#last-name').addClass('is-invalid')
            $('#talkBackText').html('Asterik (*) indicates requires fields');

        }else if(lastName.length < 2){
            $('#last-name').addClass('is-invalid')
            $('#talkBackText').html('Name too short.');
        }else if(email ==''){
            $('#email').addClass('is-invalid')
            $('#talkBackText').html('Asterik (*) indicates requires fields');

        }else if (!isValidEmail(email)) {
            $('#email').addClass('is-invalid')
            $('#talkBackText').html('Asterik (*) indicates requires fields');
        }else if(phone ==''){
            $('#phone').addClass('is-invalid')
            $('#talkBackText').html('Asterik (*) indicates requires fields');

        }else if(phone.length < 10){
            $('#phone').addClass('is-invalid')
            $('#talkBackText').html('Incomplete phone number.');
        }else if(phone.length > 10){
            $('#phone').addClass('is-invalid')
            $('#talkBackText').html('Invalid phone number.');
        }else if(!isValidPassword){
            $('#pass-1').addClass('is-invalid')
        }else if($('#pass-1').val() !== $('#pass-2').val()){
            $('#talkBackText').html('Passwords do not match.');

        } else {
            var formData = {
                firstName: $('#first-name').val(),
                lastName: $('#last-name').val(),
                email: $('#email').val(),
                phone: $('#phone').val(),
                password: $('#pass-1').val(),
                isValidPassword: validatePassword($('#pass-1').val()),
          
                // Assuming 'iti' is already initialized
                countryName: iti.getSelectedCountryData().name,
                countryCode: iti.getSelectedCountryData().dialCode
            };
        
            // Perform AJAX request
            $.ajax({
                type: 'POST',
                url: 'api/createAccount.php',
                data: formData,
                success: function(response) {
                    // Handle success response
                    console.log(response)
                    response = $.parseJSON(response)
                    if(response.status =="success"){
                        $('.account__header').hide();
                        $('#registration-form').html(`<p class="text-success">${response.message}. <a href="sign.php"> Login if you're not redirected automatically </a> </p>`); // Display success message

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


     



      // Function to generate the country code dropdown
// Function to generate the country code dropdown
// Function to generate the country code dropdown

  
  
});