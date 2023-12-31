// Upload screenshot
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