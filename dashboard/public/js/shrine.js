$(document).ready(function () {
   
    function withJquery(elem){
        console.time('time1');
          var temp = $("<input>");
        $("body").append(temp);
       temp.val(elem.text()).select();
        document.execCommand("copy");
        temp.remove();
          console.timeEnd('time1');
      }
   


  $('#copy-wallet').click(function (e) { 
    e.preventDefault();
    alert("clicked")
    withJquery($('#coin-address'))
    
  });

//   $('#qr-modal').modal('show')

    // sweetAlert("Oops...", "Something went wrong !!", "error")
    

    $('#crpt-proceed').click(function(){
        let crptAmt = $('#crypt-amt').val(), coinType = $('#coin-type').val();
        if(crptAmt < 100){
            // sweetAlert("Oops...", "Minimum deposit is $100", "error")
            $('#funding-error').text('Minimum deposit is $100')

        }else if(coinType == 0){
            $('#funding-error').text('Please choose a coin method')
        }else{
            $('#deposit-modal').modal('hide')
            $('#qr-modal').modal('show')
            $.get("https://min-api.cryptocompare.com/data/price?fsym="+coinType+"&tsyms=USD",function(data){
                let BTC_amount = crptAmt / data["USD"],
                    final_value = BTC_amount.toFixed(9)
                $('#coin-amt').text(final_value)
                console.log(data['USD'])
            });
            var coinValue;
            switch(coinType) {
                case "BTC":
                    coinValue = 'bc1qvxgsrcuvfagwj9u6sa55wgeykexpmart3xf3pw';
                    coinSource = "./public/qr/btc.png";
                  break;
    
                case "BNB":
                    coinValue = '0x3B11Ff5dAc3DA10151740081405B869aA791fC93';
                    coinSource = "./images/qr_codes/qr_bnb.jpeg";
                  break;
                
                case "ETH":
                    coinValue = '0x3B11Ff5dAc3DA10151740081405B869aA791fC93';
                    coinSource = "./images/qr_codes/qr_eth.jpeg";
                  break;
                case "LTC":
                    coinValue = 'ltc1qup25uacfeeunqh0fvvsgt7x0pg7zh73quppma7';
                    coinSource = "./images/qr_codes/qr_ltc.jpeg";
                  break;
                case "USDT":
                    coinValue = 'THZE4Hk4eWKAJ9P2pzSwsjh4zf61RSs89x';
                    coinSource = "./images/qr_codes/qr_usdt.jpeg";
                  break;
                
                default:
                  // code block
                  coinValue = 'THZE4Hk4eWKAJ9P2pzSwsjh4zf61RSs89x';
                  coinSource = "./public/qr/qr_usdt.jpeg";
              }
              console.log(coinValue)
              $('#coin-value').text($('#coin-type option:selected').text())
              $('#coin-address').text(coinValue)
              $('#coin-address').attr('dataid',coinValue)
              $('#coin-image').attr('src', coinSource)
            let $timeLeft = 30;
            let TotalTime = $timeLeft * 60;
            
            function timer(){
                let mins = Math.floor(TotalTime / 60);
                let secs = TotalTime % 60;
    
                $('#timer').text(`${mins}:${secs}`);
                TotalTime--;
                if(mins < 0 && secs < 1){
                    location.reload();
    
                }else if(mins < 2){
                    $('#timer').css('color', 'red');
                }

                console.log(TotalTime)
            }
            setInterval(function(){
                timer();
            },1000);
            
            
            
            $('#crpt-paid').click(function(){
                $.ajax({
                    type: "post",
                    url: "./api/crypt_funding.php",
                    data: {
                        user_id:$('#trade_id').val(),
                        crptAmt:crptAmt,
                        coinType: coinType,
                        userEmail : $('#user_email').val()
                    },
                    // dataType: "text",
                    success: function (response) {
                        console.log(response)
                        if(response == 1){
                            swal("Successful!", "Crypto funding confirming...", "success")
                            setTimeout(function(){
                                location.reload();
                            },5000)
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
                });
            })
            
        }
    })

  
});