// Upload screenshot
message = function(message, color, icon) {
	color = color;
	
	$.notify({
	  icon: icon,
	  message: message
	
	}, {
		  type: color,
		  timer: 3000,
		  placement: {
				from: 'bottom',
				align: 'center'
		  },
		  animate: {
			enter: 'animated slideInRight',
			exit: 'animated fadeOutRight'
		}
	});
}


function uploadProof(fileToUpload, coinName, coinAmount, coinValue){
    let formData = new FormData();
            let xhr = new XMLHttpRequest(); 

            formData.append('file', fileToUpload);
            formData.append('cointype', coinName);
            formData.append('amountPaid', coinAmount);
            formData.append('coinValue', coinValue);

            xhr.upload.addEventListener('progress', function (e) {
                if (e.lengthComputable) {
                    var percentComplete = ((e.loaded / e.total) * 100);
                    percentComplete = Math.round(percentComplete);
                    $(".progress-con").show();
                    $(".upload-bar").show();
                    // $(".upload-bar").width(percentComplete + '%');
                    // $(".upload-bar").html(percentComplete + '%');

                    console.log(percentComplete + '%')
                }
            }, false);


            xhr.open('post', '../api/uploadScreenshot.php');



            xhr.send(formData);
            xhr.onload = function () {
                // JSON.parse(this.responseText);

                console.log(this.responseText)

                if (this.responseText ==1){
                    $('#qr-modal').modal('hide')
                    swal({
                        title: "Successful!",
                        text: "Your cryptocurrency transaction is confirming...",
                        icon: "success"
                    }).then(() => {
                        location.reload();
                    });
                    fileToUpload = "";
                }else{

                   
                    swal({   
                        title: "Error!",   
                        text: "Cannot complete request at this moment, please try again later",   
                        type: "warning",   
                        confirmButtonColor: "#DD6B55",   
                        closeOnConfirm: false 
                  });

                }


                
            }
}

function uploadGiftCardProof(giftCardfileToUpload, giftName, coinAmount, coinValue){
    let formData = new FormData();
            let xhr = new XMLHttpRequest(); 

            formData.append('file', giftCardfileToUpload);
            formData.append('cointype', giftName);
            formData.append('amountPaid', coinAmount);
            formData.append('coinValue', coinValue);

            xhr.upload.addEventListener('progress', function (e) {
                if (e.lengthComputable) {
                    var percentComplete = ((e.loaded / e.total) * 100);
                    percentComplete = Math.round(percentComplete);
                    $(".progress-con").show();
                    $(".upload-bar").show();
                    // $(".upload-bar").width(percentComplete + '%');
                    // $(".upload-bar").html(percentComplete + '%');

                    console.log(percentComplete + '%')
                }
            }, false);


            xhr.open('post', '../api/uploadGiftcard.php');



            xhr.send(formData);
            xhr.onload = function () {
                // JSON.parse(this.responseText);

                console.log(this.responseText)

                if (this.responseText ==1){
                    $('#qr-modal').modal('hide')
                    swal({
                        title: "Successful!",
                        text: "Your transaction has been successfuly initiated is processing. If this takes more than 10 minutes, kindly contact support for immediate assistance",
                        icon: "tick"
                    }).then(() => {
                        location.reload();
                    });
                    fileToUpload = "";
                }else{

                   
                    swal({   
                        title: "Error!",   
                        text: "Cannot complete request at this moment, please try again later",   
                        type: "warning",   
                        confirmButtonColor: "#DD6B55",   
                        closeOnConfirm: false 
                  });

                }


                
            }
}


function generateRandomString(length) {
    const characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
    let result = '';

    for (let i = 0; i < length; i++) {
        const randomIndex = Math.floor(Math.random() * characters.length);
        result += characters.charAt(randomIndex);
    }

    return result;
}


function getName(){
    
    $('#find-loader').show();
    $.ajax({
          type: "POST",
          url: "../api/resolveBankDetails.php",
          data: {
                acc_number: $('#acc_gigits').val(),
                code: $('#locality-dropdown').val()
    },
          success: function (ac_name) {
            $('#find-loader').hide();
                ac_name = JSON.parse(ac_name);
                if(ac_name.status == true){
                      $('#acc_name').val(ac_name.data.account_name)
                // 	$('#bank_name').val(ac_name.data)
                    //   $('#acc_name_error').text("Account name retrieved")
                }else{
                    //   message("Invalid Account details", 'danger');
                      $('#acc_name_error').text("*Could not resolve account name.");
                      setTimeout(function() {
                            $('#acc_name_error').text('');
                            
                      }, 4000);
                }
          }
    });
    
}

function digitsLength(){
    $('#acc_gigits').keyup(function () { 
          if($('#acc_gigits').val().trim().length == 10){
                getName();
          }
    });
}


