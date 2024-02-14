$(document).ready(function () {

    digitsLength();


    $.ajax({
        type: "post",
        url: "../api/checkBankDetails.php",
        data: {
              trade_id: $('#user_id').val()
        },
        success: function (response) {
            // console.log(response);
              if(response ==0 ){
                    // show modal to give way to intering account details on login in
                    $('#add-bank-details').modal('show');
    
                    let dropdown = $('#locality-dropdown');

                    dropdown.empty();
                  
                    dropdown.append('<option>Select Your Bank</option>');
                    dropdown.prop('selectedIndex', 0);
                    // var url;
                    // const url = '../banks.php'
                    $.ajax({
                          type: "GET",
                          url: "../api/banks.php",
                          success: function (response) {
                            // console.log(response)
                                response = JSON.parse(response);
                                 url = response.data;
                  
                                // Populate dropdown with list of provinces
                                
                                      // const url = 'banks.php';
                                
                                var ele = document.getElementById('locality-dropdown');
                                for (var i = 0; i < url.length; i++) {
                                      // POPULATE SELECT ELEMENT WITH JSON.
                                      ele.innerHTML = ele.innerHTML +
                                            '<option  value="' + url[i]['code'] + '" b_name="' + url[i]['name'] + '">' + url[i]['name'] + '</option>';
                                }
    
                               
                          }
                  
                          
                          
                    });
                }
        }
    });

    $('#add-account-details').submit(function (e) { 
        e.preventDefault();
        if ($('#acc_name').val() === '') {
            $('#acc_name_error').text('Account Name is required');
            return false;
        }else{
            $('#bank-loader').show();
            $('#bank-btn').hide();
            $.ajax({
                type: "POST",
                url: "../api/addBank.php",
                data: {
                    bankName: $('#locality-dropdown').find(':selected').attr('b_name'),
                    accountNumber: $('#acc_gigits').val(), 
                    accountName: $('#acc_name').val()
                },
                success: function (response) {
                    // Handle success response
                    $('#bank-loader').hide();
                    $('#bank-btn').show();
                    console.log(response);

                    if(response ==1){
                        swal({
                            title: "Done!",
                            text: "Your changes have been saved successfully",
                            icon: "tick"
                        }).then(() => {
                            location.reload();
                        });
                    }else{
                        $('#bank-error-reporting').text("Network error, try again later")
                    }
                },
                error: function (error) {
                    // Handle error
                    console.error(error);
                }
            });
        }
        
    });


    $('#bank-edit').click(function (e) { 
        e.preventDefault();
        $('#add-bank-details').modal('show');

        let dropdown = $('#locality-dropdown');

        dropdown.empty();
        
        dropdown.append('<option>Select Your Bank</option>');
        dropdown.prop('selectedIndex', 0);
        // var url;
        // const url = '../banks.php'
        $.ajax({
                type: "GET",
                url: "../api/banks.php",
                success: function (response) {
                // console.log(response)
                    response = JSON.parse(response);
                        url = response.data;
        
                    // Populate dropdown with list of provinces
                    
                            // const url = 'banks.php';
                    
                    var ele = document.getElementById('locality-dropdown');
                    for (var i = 0; i < url.length; i++) {
                            // POPULATE SELECT ELEMENT WITH JSON.
                            ele.innerHTML = ele.innerHTML +
                                '<option  value="' + url[i]['code'] + '" b_name="' + url[i]['name'] + '">' + url[i]['name'] + '</option>';
                    }

                    
                }
        
                
                
        });
    
        
    });

    function withJquery(elem, alert){
        console.time('time1');
          var temp = $("<input>");
        $("body").append(temp);
       temp.val(elem.text()).select();
        document.execCommand("copy");
        temp.remove();
          console.timeEnd('time1');
          alert.text('Copied to clipboard')
          setTimeout(() => {
            alert.hide();
          }, 1000);
    }
   


  $('#ref-link-cp').click(function (e) { 
    e.preventDefault();
    // alert("clicked")
    withJquery($('#referral-link'), $('#ref-cp-alert'))
    
  });

    $('#w-method').change(function (e) { 
        e.preventDefault();
        var method = $(this).val();

        if(method =="chipper"){
            $('#address-area').fadeOut(200);
            $('#chipper-area').fadeIn(300);
        }else if(method =="crypto"){
            $('#address-area').fadeIn(300);
            $('#chipper-area').fadeOut(200);
        }else{
            $('#address-area').fadeOut(200);
            $('#chipper-area').fadeOut(200);
        }

    });

    $('#w-form').submit(function (e) { 
        e.preventDefault();

        var wMethod = $('#w-method').val(), wAmount = $('#w-amount').val(), wcoinType = $('#w-coin-type').val(), wAddress = $('#w-address').val(), chipperTag = $('#w-chipper-tag').val();

        if(wAmount == ''){
            $('#w-report').text("Withrawal amount is required");
        }else if(wAmount < 10){
            $('#w-report').text("Minimum withdrawal is $10");
        }else{
            $.ajax({
                type: "post",
                url: "../api/makeWithdrawal.php",
                data: {
                    wMethod: wMethod,
                    wAmount: wAmount,
                    wcoinType: wcoinType,
                    wAddress: wAddress,
                    chipperTag: chipperTag
                },
                success: function (response) {
                    console.log(response)
                    if(response ==1){
                        swal({
                            title: "Successful!",
                            text: "Your withdrawal is processing...",
                            icon: "tick"
                        }).then(() => {
                            location.reload();
                        });
                    }else{
                        $('#w-report').text(response)
                    }
                }
            });
        }
        
    });
});