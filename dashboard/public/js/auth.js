$(document).ready(function () {
    $('#email-verify-form').submit(function (e) { 
        e.preventDefault();

        // Get the verification code from the input field
        const verificationCode = $('#verification-code').val();

        // Send the code to the email verification API
        if (verificationCode === '') {
            $('#error-report').text('Invalid verification code. Please try again.');
            setTimeout(function () {
                $('#error-report').text('')
            }, 3000)
        }else if (verificationCode.length < 5 || verificationCode.length > 5) {
            $('#error-report').text('Incomplete verification code. Please try again.');
            setTimeout(function () {
                $('#error-report').text('')
            }, 3000)
        }else {
            console.log(verificationCode);

            $.ajax({
                type: "POST",
                url: "../api/validate_email.php",
                data: { 
                    code: verificationCode 
                },
                success: function (response) {
                    console.log(response);
                    response = $.parseJSON(response)

                    if (response.status == 'success') {
                        $('#error-report').removeClass('text-danger')
                        $('#error-report').addClass('text-success')
                        $('#error-report').text('Verification successful!');
                        setTimeout(function () {
                            $('#error-report').text('')
                            location.replace('./');
                        }, 3000)
                    } else {
                        $('#error-report').text('Verification failed. Please try again.');
                        setTimeout(function () {
                            $('#error-report').text('')
                        }, 3000)
                    }
                }
            });
        }
    });
});
