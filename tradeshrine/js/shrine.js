$(document).ready(function () {
    var fileToUpload, SentCoinName, SentCointAount, SentCoinValue, chipperSentAmount, buyWalletAddress;

    $(document).ajaxStart(function() {
        // Replace 'yourModalSelector' with the actual selector of your modal
        $('#ajax-loader').modal('show');
    
    });
    
    // Hide modal when all Ajax calls are complete
    $(document).ajaxStop(function() {
        // Replace 'yourModalSelector' with the actual selector of your modal
        $('#ajax-loader').modal('hide');
    
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
   


  $('#copy-wallet').click(function (e) { 
    e.preventDefault();
    // alert("clicked")
    withJquery($('#coin-address'), $('#w-copy-msg'))
    
  });

  $('#func-back-btn').click(function (e) { 
    e.preventDefault();
    
    $('#qr-modal').modal('hide')
        $('#deposit-modal').modal('show')
  });
  $('#sell-crypto-div').click(function (e) { 
    e.preventDefault();
    $('#deposit-modal').modal('show')
    
  });
    //   $('#sell-crypto-div').click(function (e) { 
    //     e.preventDefault();
    //     $('#deposit-modal').modal('show')
        
    //   });

    //   $('#sell-crypto-div').click(function (e) { 
    //     e.preventDefault();
    //     $('#deposit-modal').modal('show')
        
    //   });

  $('#sell-giftcard-div').click(function (e) { 
    e.preventDefault();
    $('#deposit-giftcards').modal('show')
    
  });



    //   $('#qr-modal').modal('show')

    // sweetAlert("Oops...", "Something went wrong !!", "error")
    

    $('#crpt-proceed').click(function(){
        let crptAmt = $('#crypt-amt').val(), coinType = $('#coin-type').val(), coinNetwork = $('#coin-type').find(':selected').data('id');
        console.log(coinNetwork)
        if(crptAmt < 10){
            // sweetAlert("Oops...", "Minimum deposit is $100", "error")
            $('#funding-error').text('Minimum deposit is $10')

        }else if(coinType == 0){
            $('#funding-error').text('Please choose a coin method')
        }else{
            // $.get("https://min-api.cryptocompare.com/data/price?fsym="+coinType+"&tsyms=USD",function(data){
            //     console.log(data)
            //     let BTC_amount = crptAmt / data["USD"],
            //     final_value = BTC_amount.toFixed(9)
            //     $('#coin-amt').text(final_value)
            //     $('#coin-to-send').text(coinType);
            //     $('#deposit-modal').modal('hide')
            //     $('#qr-modal').modal('show')
            // });
            $.ajax({
                type: "GET",
                url: "../api/cryptoPrice.php",
                data: {
                    coinType: coinType,
                    crptAmt: crptAmt
                },
                success: function (response) {
                    console.log(response)
                    response = $.parseJSON(response);
            
                    // Check if 'data' property exists and is not empty
                    if (response.data && response.data.length > 0) {
                        // Access the first element in the 'data' array
                        var coinData = response.data[0];
            
                        // Access the 'quote' property using the variable
                        var coinTypePrice = coinData.quote[coinType];
            
                        // Check if 'coinType' exists in the 'quote' object
                        if (coinTypePrice) {
                            var coinTypePriceValue = coinTypePrice.price;
                            var TSChargers = coinTypePrice.price * 0.02;
                            var coinTypePriceValue = coinTypePrice.price + TSChargers;
                            console.log(coinTypePriceValue);
                            $('#coin-amt').text(coinTypePriceValue.toFixed(9) + ' '+coinType)
                            $('#coin-to-send').text(coinType);
                            $('#coin-to-send-network').text('- '+coinNetwork);
                            $('#deposit-modal').modal('hide')
                            $('#qr-modal').modal('show')
                            SentCoinName = coinType;
                            SentCointAount = crptAmt;
                            SentCoinValue = coinTypePriceValue
            
                            // Use coinTypePriceValue as needed
                        } else {
                            console.error("Invalid coinType:", coinType);
                        }
                    } else {
                        console.error("No data received or data is empty");
                    }
                }
            });
            
            var coinValue;
            switch(coinType) {
                case "BTC":
                    coinValue = '1PmWA2DMcyUkSBEpT6gZRxbDKwvR8JsTyS';
                    coinSource = "public/images/coins/btc.png";
                  break;
    
                case "BNB":
                    coinValue = '0x3B11Ff5dAc3DA10151740081405B869aA791fC93';
                    coinSource = "public/images/coins/bnb.png";
                  break;
                
                case "ETH":
                    coinValue = '0x91bca6ea67f1171733b965613bd07f0941880d00';
                    coinSource = "public/images/coins/eth.png";
                  break;
                case "LTC":
                    coinValue = 'ltc1qup25uacfeeunqh0fvvsgt7x0pg7zh73quppma7';
                    coinSource = "public/images/coins/qr_ltc.png";
                  break;
                case "USDT":
                    coinValue = 'TMi5wFYQUsdqc1xW5NFtEJoji3VC7eMjoV';
                    coinSource = "public/images/coins/usdt.png";
                  break;
                
                default:
                  // code block
                  coinValue = 'Uknown Wallet address';
                  coinSource = "No Coin Chosen";
            }
              console.log(coinValue)
            $('#coin-value').text($('#coin-type option:selected').text())
            $('#coin-address').text(coinValue)
            $('#coin-address').attr('data-id',coinValue)
            $('#coin-image').attr('src', coinSource)
              console.log(coinSource)
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

                // console.log(TotalTime)
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


    $('#complete-crypto').click(function(e){
        e.preventDefault();

        $('#crypto-proof').trigger('click');
    })

    $('#crypto-proof').change(function (e) {
        console.log(e.target.files)
        if (e.target.files[0]['size'] > 10085867) {
            alert('File too large');
        } else {
            fileToUpload = e.target.files[0];
            uploadProof(fileToUpload, SentCoinName, SentCointAount, SentCoinValue)
        }
    });

   


    // Upload gift card
    $('#complete-giftcard').click(function(e){
        e.preventDefault();
        let giftcardAmt = $('#giftcard-amount').val(), giftcardType = $('#gitcard-type').val(), giftcardNumber = $('#giftcard-number').val();

        if(giftcardType == 0){
            $('#giftcard-error').text('Please choose a giftcard type to trade')
        }else if(giftcardAmt < 50){
            // sweetAlert("Oops...", "Minimum deposit is $100", "error")
            $('#giftcard-error').text('Minimum giftcard trading is $50')

        } else if(giftcardNumber.length < 7){
            $('#giftcard-error').text('Enter a valid giftcard number')
        }else{
                                 
            $('#giftcard-proof').trigger('click');
        }

    })

    $('#giftcard-proof').change(function (e) {
        // console.log(e.target.files)
        let giftcardAmt = $('#giftcard-amount').val(), giftcardType = $('#gitcard-type').val(), giftcardNumber = $('#giftcard-number').val();
        if (e.target.files[0]['size'] > 10085867) {
            alert('File too large');
        } else {
            giftCardfileToUpload = e.target.files[0];
            uploadGiftCardProof(giftCardfileToUpload, giftcardType, giftcardAmt, giftcardNumber)
        }
    });

    $('#gitcard-type').change(function (e) { 
        e.preventDefault();
        var selected = $(this).selected().attr('data-id')
        console.log(selected)

        
    });


    $('#buy-crypto').click(function(){
        $('#buy-crypto-modal').modal('show')
    })

    $('#buy-cointype').change(function(){
        var coinType = $(this).val();
        switch (coinType) {
            case 'BTC':
                imgSrc = 'images/btc-logo.png';
                
                break;

            case 'BNB':
                imgSrc = 'images/bnb-logo.png';

                break;

            case 'ETH':
                imgSrc = 'images/ethereum.png';

                break;

            case 'USDT':
                imgSrc = 'images/usdt-logo.png';
                
                break;
        
            default:
                imgSrc = 'images/btc-logo.png';

                break;

        }
        $('#coin-image').attr('src',imgSrc);
        $('#buy-coin-name').text(coinType);

        // if(coinType =)
    })

    $('#buy-crypto-form').submit(function(e){
        e.preventDefault();
        var amount = Number($('#buy-coin-amount').val()), coinType = $('#buy-cointype').val(), walletAddress = $('#buy-coin-address').val();
        per = amount * 0.017;
        total = amount + per;

        if(amount < 10){
            $('#buy-crypto-report').text("Minimum trading amount is $10");
            console.log(total)
        }else if(walletAddress ==""){
            $('#buy-crypto-report').text("Wallet address is required");

        }else{
            $.ajax({
                type: "GET",
                url: "../api/cryptoPrice.php",
                data: {
                    coinType: coinType,
                    crptAmt: total
                },
                success: function (response) {
                    console.log(response)
                    response = $.parseJSON(response);
            
                    // Check if 'data' property exists and is not empty
                    if (response.data && response.data.length > 0) {
                        // Access the first element in the 'data' array
                        var coinData = response.data[0];
            
                        // Access the 'quote' property using the variable
                        var coinTypePrice = coinData.quote[coinType];
            
                        // Check if 'coinType' exists in the 'quote' object
                        if (coinTypePrice) {
                            var coinTypePriceValue = coinTypePrice.price;
                            var TSChargers = coinTypePrice.price * 0.02;
                            // var coinTypePriceValue = coinTypePrice.price - TSChargers;
                            coinTypePrice = coinTypePriceValue;
                            
                            // $('#buy-coin-to-send-network').text('- '+coinNetwork);
                            console.log(coinTypePrice)
                            
                            SentCoinValue = coinTypePriceValue
                            
                            SentCoinName = coinType;
                            SentCointAount = total;
                            buyWalletAddress = walletAddress;

                            $('#buy-sell-area').hide();
                            $('#buy-sell-result').show();

                            $('.coin-value-buy').text(coinTypePrice)
                            $('.coin-name-buy').text(SentCoinName)
                            $('.buy-coin-amount').text(SentCointAount)
                            
                            // Use coinTypePriceValue as needed
                        } else {
                            console.error("Invalid coinType:", coinType);
                        }

                        
                    } else {
                        console.error("No data received or data is empty");
                    }
                }
            });
        }

    })

    $('#complete-crypto-purchase').click(function (e) { 
        e.preventDefault();
    
        // Log to verify the click event is being triggered
        // console.log(coinTypePrice)
    
        $.ajax({
            type: "post",
            url: "../api/buy-crypto.php",
            data: {
                amountPaid: SentCointAount,
                coinType: SentCoinName,
                coinValue: SentCoinValue,
                walletAddress: buyWalletAddress
            },
            success: function (response) {
                $('#ajax-loader').remove();
                console.log('Success:', response);
                $('#buy-modal-body').html(`
                <div class="alert alert-primary notification">
                    <p class="notificaiton-title mb-2"><strong>Success!</strong> Crypto purchase processing.</p>
                    <p>Hang on a little bit, our experts will process your requests ASAP.</p>
                    
                </div>
                `)
                setTimeout(function(){
                    location.replace('pending-buy.php');

                }, 2000)
            }
        });
    });

    // Show rate
    $('#buy-coin-amount').on('keyup', function(){
        var amount = Number($(this).val());
        per = amount * 0.017;
        console.log(per);
        total = amount + per;
        $('#buy-coin-total').text( total.toLocaleString(2,2) )
    });
    // alert("Hello World")


    $('#buy-crpt-proceed').click(function(){
        let crptAmt = $('#buy-crypt-amt').val(), coinType = $('#buy-coin-type').val(), walletAddress = $('#buy-crypt-address').val();
        if(crptAmt < 10){
            // sweetAlert("Oops...", "Minimum deposit is $100", "error")
            $('#funding-error').text('Minimum deposit is $50')

        }else if(coinType == 0){
            $('#funding-error').text('Please choose a coin method')
        }else{
            let coinTypePrice;
            
            $.ajax({
                type: "GET",
                url: "../api/cryptoPrice.php",
                data: {
                    coinType: coinType,
                    crptAmt: crptAmt
                },
                success: function (response) {
                    console.log(response)
                    response = $.parseJSON(response);
            
                    // Check if 'data' property exists and is not empty
                    if (response.data && response.data.length > 0) {
                        // Access the first element in the 'data' array
                        var coinData = response.data[0];
            
                        // Access the 'quote' property using the variable
                        var coinTypePrice = coinData.quote[coinType];
            
                        // Check if 'coinType' exists in the 'quote' object
                        if (coinTypePrice) {
                            var coinTypePriceValue = coinTypePrice.price;
                            var TSChargers = coinTypePrice.price * 0.02;
                            // var coinTypePriceValue = coinTypePrice.price - TSChargers;
                            coinTypePrice = coinTypePriceValue;
                            $('#buy-coin-amt').text(walletAddress)
                            $('#buy-coin-to-send').text(coinType);
                            // $('#buy-coin-to-send-network').text('- '+coinNetwork);
                            $('#buy-crypto-modal').modal('hide')
                            $('#buy-modal').modal('show')
                            SentCoinValue = coinTypePriceValue
                            
                            
            
                            // Use coinTypePriceValue as needed
                        } else {
                            console.error("Invalid coinType:", coinType);
                        }

                        let $buyTimeLeft = 30;
                        let butTotalTime = $buyTimeLeft * 60;
                        
                        function timer(){
                            let buyMins = Math.floor(butTotalTime / 60);
                            let buySecs = butTotalTime % 60;
                
                            $('#buy-timer').text(`${buyMins}:${buySecs}`);
                            butTotalTime--;
                            if(buyMins < 0 && buySecs < 1){
                                location.reload();
                
                            }else if(buyMins < 2){
                                $('#buy-timer').css('color', 'red');
                            }

                            // console.log(butTotalTime)
                        }
                        setInterval(function(){
                            timer();
                        },1000);
                    } else {
                        console.error("No data received or data is empty");
                    }
                }
            });
            
            // Zahavi come here
            $('#complete-crypto-purchase').click(function (e) { 
                e.preventDefault();
            
                // Log to verify the click event is being triggered
                console.log(coinTypePrice)
            
                $.ajax({
                    type: "post",
                    url: "../api/buy-crypto.php",
                    data: {
                        amountPaid: crptAmt,
                        coinType: coinType,
                        coinValue: SentCoinValue,
                        walletAddress: walletAddress
                    },
                    success: function (response) {
                        $('#ajax-loader').remove();
                        console.log('Success:', response);
                        $('#buy-modal-body').html(`
                        <div class="alert alert-primary notification">
                            <p class="notificaiton-title mb-2"><strong>Success!</strong> Crypto purchase processing.</p>
                            <p>Hang on a little bit, our experts will process your requests ASAP.</p>
                            
                        </div>
                        `)
                        
                        setTimeout(function(){
                            location.replace('pending-buy.php');
                        }, 2000)
                    }
                });
            });
            
            
            
        }
    })


    // Sell coin Validation
    $('#sell-cointype').change(function(){
        var coinType = $(this).val();
        switch (coinType) {
            case 'BTC':
                imgSrc = 'images/btc-logo.png';
                
                break;

            case 'BNB':
                imgSrc = 'images/bnb-logo.png';

                break;

            case 'ETH':
                imgSrc = 'images/ethereum.png';

                break;

            case 'USDT':
                imgSrc = 'images/usdt-logo.png';
                
                break;
        
            default:
                imgSrc = 'images/btc-logo.png';

                break;

        }
        $('#sell-coin-image').attr('src',imgSrc);
        $('#sell-coin-name').text(coinType);

        // if(coinType =)
    })

    $('#sell-crypto-form').submit(function(e){
        e.preventDefault();
        console.log(e)
        var amount = Number($('#sell-coin-amount').val()), coinType = $('#sell-cointype').val();
        per = amount * 0.017;
        total = amount + per;

        if(amount < 10){
            $('#sell-crypto-report').text("Minimum trading amount is $10");
            console.log(total)
        }else{
            $.ajax({
                type: "GET",
                url: "../api/cryptoPrice.php",
                data: {
                    coinType: coinType,
                    crptAmt: total
                },
                success: function (response) {
                    console.log(response)
                    response = $.parseJSON(response);
            
                    // Check if 'data' property exists and is not empty
                    if (response.data && response.data.length > 0) {
                        // Access the first element in the 'data' array
                        var coinData = response.data[0];
            
                        // Access the 'quote' property using the variable
                        var coinTypePrice = coinData.quote[coinType];
            
                        // Check if 'coinType' exists in the 'quote' object
                        if (coinTypePrice) {
                            var coinTypePriceValue = coinTypePrice.price;
                            var TSChargers = coinTypePrice.price * 0.02;
                            // var coinTypePriceValue = coinTypePrice.price - TSChargers;
                            coinTypePrice = coinTypePriceValue;
                            
                            // $('#buy-coin-to-send-network').text('- '+coinNetwork);
                            console.log(coinTypePrice)
                            
                            SentCoinValue = coinTypePriceValue
                            
                            SentCoinName = coinType;
                            SentCointAount = total;

                            $('#buy-sell-area').hide();
                            $('#sell-sell-result').show();

                            switch(coinType) {
                                case "BTC":
                                    coinValue = 'bc1qa8v8z7sqztaazr3qamazj6t39sq5xfyn2k0nnq';
                                    coinSource = "images/coins/btc.png";
                                    coinNetwork = "BTC";
                                  break;
                    
                                case "USDC":
                                    coinValue = '0x3eB8d3C3dfd0F12256C41c10Ebd9c0ddb6E67d2F';
                                    coinSource = "images/coins/usdc.png";
                                    coinNetwork = "USDC";
                                  break;
                                
                                case "ETH":
                                    coinValue = '0x9f3C36F2E976cfD93e826112d2BE8059aB560EF2';
                                    coinSource = "images/coins/eth.png";
                                    coinNetwork = "ERC20";
                                  break;
                                
                                case "USDT":
                                    coinValue = 'TEYkfwuazs3aeUmLqb9mUMTNqib9k4wAZ1';
                                    coinSource = "images/coins/usdt.png";
                                    coinNetwork = "TRC20";
                                  break;
                                
                                default:
                                  // code block
                                  coinValue = 'Uknown Wallet address';
                                  coinSource = "No Coin Chosen";
                                  coinNetwork = "Not Set";
                            }
                              console.log(coinValue)
                            $('#sell-coin-value').text($('#sell-cointype option:selected').text())
                            $('#sell-coin-address-display').text(coinValue)
                            $('#sell-coin-address-display').attr('data-id',coinValue)
                            $('#sell-coin-image-qr').attr('src', coinSource)
                              console.log(coinSource)
                            let $timeLeft = 30;
                            let TotalTime = $timeLeft * 60;
                            
                            function timer(){
                                let mins = Math.floor(TotalTime / 60);
                                let secs = TotalTime % 60;
                    
                                $('#sell-timer').text(`${mins}:${secs}`);
                                TotalTime--;
                                if(mins < 0 && secs < 1){
                                    location.reload();
                    
                                }else if(mins < 2){
                                    $('#sell-timer').css('color', 'red');
                                }
                
                                // console.log(TotalTime)
                            }
                            setInterval(function(){
                                timer();
                            },1000);

                            $('.coin-value-sell').text(coinTypePrice.toFixed(5) +' '+SentCoinName)
                            $('.coin-name-sell').text(SentCoinName)
                            $('.sell-coin-amount').text('$'+SentCointAount)
                            $('.sell-coin-network').text(coinNetwork)
                            
                            
                            // Use coinTypePriceValue as needed
                        } else {
                            console.error("Invalid coinType:", coinType);
                        }

                        
                    } else {
                        console.error("No data received or data is empty");
                    }
                }
            });
            
            
        }

    })

    $('#complete-crypto-sale').click(function (e) { 
        e.preventDefault();
    
        // Log to verify the click event is being triggered
        // console.log(coinTypePrice)
    
        $.ajax({
            type: "post",
            url: "../api/buy-crypto.php",
            data: {
                amountPaid: SentCointAount,
                coinType: SentCoinName,
                coinValue: SentCoinValue,
                walletAddress: buyWalletAddress
            },
            success: function (response) {
                $('#ajax-loader').remove();
                console.log('Success:', response);
                $('#buy-modal-body').html(`
                <div class="alert alert-primary notification">
                    <p class="notificaiton-title mb-2"><strong>Success!</strong> Crypto purchase processing.</p>
                    <p>Hang on a little bit, our experts will process your requests ASAP.</p>
                    
                </div>
                `)
                setTimeout(function(){
                    location.replace('pending-buy.php');

                }, 2000)
            }
        });
    });

    // Show rate
    $('#sell-coin-amount').on('keyup', function(){
        var amount = Number($(this).val());
        per = amount * 0.017;
        console.log(per);
        total = amount + per;
        $('#sell-coin-total').text( total.toLocaleString(2,2) )
    });


    $('#sell-crpt-proceed').click(function(){
        let crptAmt = $('#sell-crypt-amt').val(), coinType = $('#sell-coin-type').val(), walletAddress = $('#sell-crypt-address').val();
        if(crptAmt < 10){
            // sweetAlert("Oops...", "Minimum deposit is $100", "error")
            $('#funding-error').text('Minimum deposit is $50')

        }else if(coinType == 0){
            $('#funding-error').text('Please choose a coin method')
        }else{
            let coinTypePrice;
            
            $.ajax({
                type: "GET",
                url: "../api/cryptoPrice.php",
                data: {
                    coinType: coinType,
                    crptAmt: crptAmt
                },
                success: function (response) {
                    console.log(response)
                    response = $.parseJSON(response);
            
                    // Check if 'data' property exists and is not empty
                    if (response.data && response.data.length > 0) {
                        // Access the first element in the 'data' array
                        var coinData = response.data[0];
            
                        // Access the 'quote' property using the variable
                        var coinTypePrice = coinData.quote[coinType];
            
                        // Check if 'coinType' exists in the 'quote' object
                        if (coinTypePrice) {
                            var coinTypePriceValue = coinTypePrice.price;
                            var TSChargers = coinTypePrice.price * 0.02;
                            // var coinTypePriceValue = coinTypePrice.price - TSChargers;
                            coinTypePrice = coinTypePriceValue;
                            $('#sell-coin-amt').text(walletAddress)
                            $('#sell-coin-to-send').text(coinType);
                            // $('#buy-coin-to-send-network').text('- '+coinNetwork);
                            $('#sell-crypto-modal').modal('hide')
                            $('#sell-modal').modal('show')
                            SentCoinValue = coinTypePriceValue
                            
                            
            
                            // Use coinTypePriceValue as needed
                        } else {
                            console.error("Invalid coinType:", coinType);
                        }

                        let $buyTimeLeft = 30;
                        let butTotalTime = $buyTimeLeft * 60;
                        
                        function timer(){
                            let buyMins = Math.floor(butTotalTime / 60);
                            let buySecs = butTotalTime % 60;
                
                            $('#sell-timer').text(`${buyMins}:${buySecs}`);
                            butTotalTime--;
                            if(buyMins < 0 && buySecs < 1){
                                location.reload();
                
                            }else if(buyMins < 2){
                                $('#sell-timer').css('color', 'red');
                            }

                            // console.log(butTotalTime)
                        }
                        setInterval(function(){
                            timer();
                        },1000);
                    } else {
                        console.error("No data received or data is empty");
                    }
                }
            });
            
            // Zahavi come here
            $('#complete-crypto-sale').click(function (e) { 
                e.preventDefault();
            
                // Log to verify the click event is being triggered
                console.log(coinTypePrice)
            
                $.ajax({
                    type: "post",
                    url: "../api/buy-crypto.php",
                    data: {
                        amountPaid: crptAmt,
                        coinType: coinType,
                        coinValue: SentCoinValue,
                        walletAddress: walletAddress
                    },
                    success: function (response) {
                        $('#ajax-loader').remove();
                        console.log('Success:', response);
                        $('#buy-modal-body').html(`
                        <div class="alert alert-primary notification">
                            <p class="notificaiton-title mb-2"><strong>Success!</strong> Crypto purchase processing.</p>
                            <p>Hang on a little bit, our experts will process your requests ASAP.</p>
                            
                        </div>
                        `)
                        
                        setTimeout(function(){
                            location.replace('pending-buy.php');
                        }, 2000)
                    }
                });
            });
            
            
            
        }
    })



    // Fiat Purcchase

    // Show modal
    // $('#fund-fiat-modal').modal('show');


    $('#fiat-btn').click(function () { 
        $('#fund-fiat-modal').modal('show');
        
    });
    $('#fiat-proceed').click(function (e) { 
        e.preventDefault();
        var amount = $('#fiat-depo-amt').val();
        var depositMethod = $('#pay-method').val();

        if(amount < 10){
            $('#fiat-fund-error').text("Amount must be $10 and above");

        }else if(depositMethod =='chipper'){
            chipperSentAmount = amount;
            $('#fiat-fund-back').fadeIn();
            $('#fiat-fund-area').fadeOut(200);
            $('#chipper-cash-area').fadeIn(300);

        }else{

            let payRef  = generateRandomString(30)
            console.log('...Here')
            const options = {
                amount: amount,
                currency: 'NGN',
                domain: 'sandbox',
                key: 'b7c493ad-9a1d-4576-9210-b415bb806648',
                
                email: 'orderbuyer@givmail.com',
                transactionref: payRef,
                customer_logo:'https://dropin.vpay.africa/dropin/v1/initialise.js',
                customer_service_channel: '+2348030007000, support@org.com',
                txn_charge: 6,
                txn_charge_type: 'flat',
                onSuccess: function(response) { 
                    console.log('Hello World!',
                    response.message);
                    $.ajax({
                        type: "post",
                        url: "../api/fundWallet.php",
                        data: {
                            amountToFund: amount,
                            payRef: payRef
                        },
                        success: function (response) {
                            console.log(response)
                            if(response ==1){
                                swal({
                                    title: "Successful!",
                                    text: "Your transaction was successful and your wallet has been credited. If there are concerns, kindly contact support for immediate assistance",
                                    icon: "tick"
                                }).then(() => {
                                    location.reload();
                                });
                            }
                        }
                    });
                },
                onExit: function(response) { 
                    console.log('Hello World!',
                    response.message); 
                }


            }

            if(window.VPayDropin){
                const {open, exit} = VPayDropin.create(options);
                open();                    
            } 
            
        }
    });

    $('#complete-chipper').click(function (e) { 
        e.preventDefault();
        $('#chipper-proof').trigger('click');
        
    });

    $('#chipper-proof').change(function (e) { 
        e.preventDefault();
        console.log(e.target.files)
        if (e.target.files[0]['size'] > 10085867) {
            alert('File too large');
        } else {
            fileToUpload = e.target.files[0];
            uploadProof(fileToUpload, 'Chiiper Cash', chipperSentAmount, chipperSentAmount)
        }
        
    });


    $('#fiat-fund-back').click(function (e) { 
        e.preventDefault();
        $('#chipper-cash-area').fadeOut();
        $('#fiat-fund-area').fadeIn();
        $(this).fadeOut(100)
        
    });
    

    
    
//test for getting url value from attr
// var img1 = $('.test').attr("data-thumbnail");
// console.log(img1);

//test for iterating over child elements
var langArray = [], coinToBuy = 'btc';
$('.vodiapicker option').each(function(){
  var img = $(this).attr("data-thumbnail");
  var text = this.innerText;
  var value = $(this).val();
  var item = '<li><img src="'+ img +'" alt="" value="'+value+'"/><span>'+ text +'</span></li>';
  langArray.push(item);
})

$('#a').html(langArray);

//Set the button value to the first el of the array
    $('.btn-select').html(langArray[0]);
    $('.btn-select').attr('value', 'btc');


//change button stuff on click
    $('#a li').click(function(){
        var img = $(this).find('img').attr("src");
        var value = $(this).find('img').attr('value');
        var text = this.innerText;
        var item = '<li><img src="'+ img +'" alt="" /><span>'+ text +'</span></li>';
        $('.btn-select').html(item);
        $('.btn-select').attr('value', value);
        $(".b").toggle();
        console.log(value);
        coinToBuy = value;
    });

    $(".btn-select").click(function(){
        $(".b").toggle();
    });

    //check local storage for the lang
    var sessionLang = localStorage.getItem('lang');
    if (sessionLang){
        //find an item with value of sessionLang
        var langIndex = langArray.indexOf(sessionLang);
        $('.btn-select').html(langArray[langIndex]);
        $('.btn-select').attr('value', sessionLang);
    } else {
            var langIndex = langArray.indexOf('usdt');
        // console.log(langIndex);
        $('.btn-select').html(langArray[langIndex]);
        //$('.btn-select').attr('value', 'en');
    }


    $('#buy-crypt-amt').keyup(function (e) { 
        amountToSell = $(this).val()
        $.ajax({
            type: "GET",
            url: "../api/cryptoPrice.php",
            data: {
                coinType: coinToBuy,
                crptAmt: amountToSell
            },
            success: function (response) {
                console.log(response)
                response = $.parseJSON(response);
        
                // Check if 'data' property exists and is not empty
                if (response.data && response.data.length > 0) {
                    // Access the first element in the 'data' array
                    var coinData = response.data[0];
        
                    // Access the 'quote' property using the variable
                    var coinTypePrice = coinData.quote[coinType];
        
                    // Check if 'coinType' exists in the 'quote' object
                    if (coinTypePrice) {
                        var coinTypePriceValue = coinTypePrice.price;
                        var TSChargers = coinTypePrice.price * 0.019;
                        // var coinTypePriceValue = coinTypePrice.price - TSChargers;
                        coinTypePrice = coinTypePriceValue - TSChargers;
                        $('#buy-coin-amt').text(walletAddress)
                        $('#buy-coin-to-send').text(coinType);
                        // $('#buy-coin-to-send-network').text('- '+coinNetwork);
                        $('#buy-crypto-modal').modal('hide')
                        $('#buy-modal').modal('show')
                        SentCoinValue = coinTypePrice
                        
                        
        
                        // Use coinTypePriceValue as needed
                    } else {
                        console.error("Invalid coinType:", coinType);
                    }
                    
                    
                } else {
                    console.error("No data received or data is empty");
                }
            }
        });
    });

    let coursePrice =0;
    $('.subscribe-btn').click(function(){
        var classCategory = $(this).attr('data-id')
        console.log(classCategory)
        if(classCategory == 1){
            coursePrice = 50;

            console.log(classCategory)
            console.log(coursePrice)

            
        }else if (classCategory == 2){

            coursePrice = 100;
            console.log(classCategory)
            console.log(coursePrice)

        }else if(classCategory == 3){

            coursePrice = 300;
            console.log(classCategory)
            console.log(coursePrice)
        }else{
            coursePrice = 0;
            console.log(classCategory)
            console.log(coursePrice)
        }

        $('#pay-method-modal').modal('show')

        $('#pay-method-btn').click(function(){
            var chosenMethod = $('#aca-pay-method').val()
            if(chosenMethod == 'wallet'){
                $.ajax({
                    type: "post",
                    url: "../api/academySubscription.php",
                    data: {
                        coursePrice:coursePrice,
                        chosenMethod:chosenMethod,
                        classCategory: classCategory,
                        payMethod: 1
                    },
                    success: function (response) {
                        console.log(response)

                        if(response == 1){
                            $('#make-payment-area').html(`
                                <p class="text-success"> Your enrollment was successful. Check your email for further instructions </p>
                            `)
                            setTimeout(function(){
                                location.reload();
                            },3000)
                        }else{
                            $('#pay-method-error').text('Error: '+response)
                        }

                    }
                });
            }else{
                let payRef  = generateRandomString(30)
                const options = {
                    amount: coursePrice,
                    currency: 'NGN',
                    domain: 'sandbox',
                    key: 'b7c493ad-9a1d-4576-9210-b415bb806648',
                    
                    email: $('#hidden-email').val(),
                    transactionref: payRef,
                    customer_logo:'https://dropin.vpay.africa/dropin/v1/initialise.js',
                    customer_service_channel: '+2348030007000, support@org.com',
                    txn_charge: 6,
                    txn_charge_type: 'flat',
                    onSuccess: function(response) { 
                        console.log('Hello World!',
                        response.message);
                        $.ajax({
                            type: "post",
                            url: "../api/academySubscription.php",
                            data: {
                                coursePrice:coursePrice,
                                chosenMethod:chosenMethod,
                                classCategory: classCategory,
                                payMethod: 2
                            },
                            success: function (response) {
                                console.log(response)
        
                            }
                        });
                    },
                    onExit: function(response) { 
                        console.log('Hello World!',
                        response.message); 
                    }


                }

                if(window.VPayDropin){
                    const {open, exit} = VPayDropin.create(options);
                    open();                    
                } 
            }
        })


    })


    

  
});




// let $buyTimeLeft = 30;
// let butTotalTime = $buyTimeLeft * 60;

// function timer(){
//     let buyMins = Math.floor(butTotalTime / 60);
//     let buySecs = butTotalTime % 60;

//     $('#buy-timer').text(`${buyMins}:${buySecs}`);
//     butTotalTime--;
//     if(buyMins < 0 && buySecs < 1){
//         location.reload();

//     }else if(buyMins < 2){
//         $('#buy-timer').css('color', 'red');
//     }

//     // console.log(butTotalTime)
// }
// setInterval(function(){
//     timer();
// },1000);