<div class="modal fade" id="deposit-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Deposit With Crypto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <div id="first-area">
                    <p>What asset would you be trading? Select a list of coin below to proceed</p>
                    <form>
                        <div class="mb-3 form-group">
                            <label class="form-label">Select list (select one):</label>
                            <select class="default-select form-control wide" id="coin-type" >
                                <option value="BNB" data-id="BEP20">BNB</option>
                                <option value="BTC" data-id=" ">BTC</option>
                                <option value="ETH" data-id="ERC20">ETH</option>
                                <option value="USDT" data-id="TRC20">USDT</option>
                                <!-- <option value="SOLANA">SOLANA</option> -->
                                <!-- <option value="SHIBA INU">SHIBA INU</option>
                                <option value="DODGECOIN">DODGECOIN</option>
                                <option value="XRP">XRP</option>
                                <option value="TRX">TRX</option> -->
                            </select>
                        </div> <br> <br>
                        <div class="mb-3 form-group">
                            <input type="number" class="form-control" id="crypt-amt" placeholder="Enter amount">
                        </div>
                       
                        <!-- <small class="text-danger">error</small> -->
                        
                    </form>
                </div>
                <div id="" class="text-center">
                    <p id="funding-error" class="text-danger"></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="crpt-proceed">Proceed</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="qr-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-warning" id="timer"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">

            <!-- <div id="pay-complete" class="text-center" style="display: none;">
                <input type="file" id="chosen-file" >
                <div id="choose-image">
                    <p class="mt-2">Upload screenshot/receipt</p>
                </div>
            </div> -->
                
                <div id="second-area" class="text-center ">
                    <p>Send only <span id="coin-to-send"></span> <span id="coin-to-send-network"></span> to the address below. Sending any other coin may result in a loss.</p>
                    <img id="coin-image" src="public/qr/btc.png" alt="" width="150">
                    <p>
                        <span id="coin-address" data-id=""></span> 
                        <i class="fa fa-copy" id="copy-wallet"></i> 
                        <p id="w-copy-msg" class="text-success small"></p>
                    </p> 
                    <h4 id="coin-amt" class="text-center"></h4>
                </div>
            </div>
            <!-- <p class="text-muted small text-center">After making this transaction, kindly take a screenshot of your receipt and click 'Complete Transaction' to upload proof.</p> -->
            <div class="modal-footer">
                <button type="button" class="btn btn-dark light" id="func-back-btn">Back</button>
                <input type="file" name="" id="crypto-proof" style="display: none;">
                <button type="button" class="btn btn-warning" id="complete-crypto">Complete Transaction</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="buy-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-warning" id="buy-timer"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div id="buy-modal-body">
                <div class="modal-body">
                    
                    <div id="second-area" class="text-center ">
                        <p>Your <span id="buy-coin-to-send"></span> purchase is currently processing and your provided wallet address will be credited once this is complete.</p>
                        <p>
                        Wallet Address:  <span id="buy-coin-address" data-id=""></span> 
                        </p> 
                        <h4 id="buy-coin-amt" class="text-center"></h4>
                    </div>
                </div>
                <!-- <p class="text-muted small text-center">After making this transaction, kindly take a screenshot of your receipt and click 'Complete Transaction' to upload proof.</p> -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark light" data-bs-dismiss="modal">Close</button>
                    <!-- <input type="file" name="" id="crypto-proof" style="display: none;"> -->
                    <button type="button" class="btn btn-primary" id="complete-crypto-purchase">Finish</button>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="footer">
		
    <div class="copyright">
        <p>©2024 -  Tradeshrine</p>
    </div>
</div> 

<input type="hidden" id="user_id" value="<?php echo $userDetails['user_id']; ?>">





<div class="modal fade" id="deposit-giftcards">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Sell Your Gift Cards</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <div id="first-area">
                    <p>What asset would you be trading? Select a list of coin below to proceed.</p>
                    <form>
                        <div class="mb-3 form-group">
                            <label class="form-label">Select Gift Card to sell</label>
                            <select class="default-select form-control wide" id="gitcard-type" >
                                <option value="0" >--Select--</option>
                                <?php
                                $Payment = new Payments();

                                $all_giftcards = $Payment->getGiftCards();
                                foreach($all_giftcards as $row){ ?>

                                <option value="<?php echo $row['giftcard']; ?>" data-id="<?php echo $row['rate']; ?>"><?php echo $row['giftcard']; ?> </option>

                                <?php } ?>
                                
                            </select>
                            <p class="small" id="giftcard-rate"></p>
                        </div> 
                        <div class="form-wrapper">
                            <div class="form-group">
                                <div class="">
                                    <label class="form-label">Amount</label>
                                    <input type="number" class="form-control" placeholder="0.00" id="giftcard-amount">
                                </div>
                            </div>
                        </div>
                        <div class="form-wrapper">
                            <div class="form-group">
                                <div class="">
                                    <label class="form-label">Gift Card Number</label>
                                    <input type="text" class="form-control" placeholder="9874-9876-48263" id="giftcard-number">
                                </div>
                            </div>
                        </div>
                       
                        <!-- <small class="text-danger">error</small> -->
                        
                    </form>
                </div>
                <div id="" class="text-center">
                    <p id="giftcard-error" class="text-danger"></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <input type="file" name="" id="giftcard-proof" style="display: none;">
                <button type="button" class="btn btn-dark" id="complete-giftcard">Upload Giftcard</button>
                <!-- <button type="button" class="btn btn-primary" id="giftcard-proceed">Proceed</button> -->
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="buy-crypto-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Buy Crypto With Cash</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <div id="first-area">
                    <p>What asset would you be trading? Select a list of coin below to proceed</p>
                    <!-- <form> -->
                        <!-- <div class="mb-3 form-group">
  
                        <select class=" form-control wide" id="buy-coin-type">
                            <option value="BTC" data-id="">&#x20BF; <img src="public/images/svg/btc1.svg" alt="BTC" height="22" width="22" loading="lazy">BTC</option>
                            <option value="BNB" data-id="BEP20">🔶 BNB (BEP20)</option>
                            <option value="ETH" data-id="ERC20"><span class="text-" style="color:blue">&#x27E0;</span> ETH (ERC20)</option>
                            <option value="USDT" data-id="TRC20"> ₮ USDT (TRC20)</option>
                        </select>

                        </div>  -->

                        <div class="form-group">
                            <select class="vodiapicker " id="buy-coin-type">
                                <option value="BTC" class="test" data-thumbnail="public/images/svg/btc1.svg">Bitcoin (BTC)</option>
                                <option value="BNB" data-id="BEP20" data-thumbnail="public/images/svg/bnb.png">BNB (BEP20)</option>
                                <option value="ETH" data-id="ERC20" data-thumbnail="public/images/svg/eth.png">Etherium (ERC20) </option>
                                <option value="USDT" data-id="TRC20" data-thumbnail="public/images/svg/usdt.png">USDT (TRC20)</option>
                            </select>

                            <div class="lang-select ">
                                <button class="btn-select form-control" value=""></button>
                                <div class="b">
                                <ul id="a"></ul>
                                </div>
                            </div>
                        </div>
                        

                       <!-- <div class="form-group">
                            <div class="sc-fIwssx xHCwd">
                                <img src="public/images/svg/btc1.svg" alt="BTC" height="22" width="22" loading="lazy">
                                <div class="sc-OKtSx gkFJZl">Bitcoin<span class="sc-bhlPkD eLwfA-d">(BTC)</span></div>

                                <svg aria-hidden="true" focusable="false" role="img" height="10" width="10" xmlns="http://www.w3.org/2000/svg" data-icon="chevron-right" viewBox="0 0 320 512" color="#0085FF" class="sc-ejWHKt llNCox"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path>
                                </svg>
                            </div>
                       </div> -->
                        <div class="mb-3 form-group">
                            <input type="number" class="form-control" id="buy-crypt-amt" placeholder="Enter amount">
                        </div>
                        <div class="form-group">
                            <p class="small">
                                1 <span class="coin-type-rate"></span> = <span class="coin-value-rate"></span>
                            </p>
                        </div>
                        <div class="mb-3 form-group">
                            <input type="text" class="form-control" id="buy-crypt-address" placeholder="Enter your wallet address">
                        </div>
                       
                        <!-- <small class="text-danger">error</small> -->
                        
                    <!-- </form> -->
                </div>
                <div id="" class="text-center">
                    <p id="funding-error" class="text-danger"></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="buy-crpt-proceed">Proceed</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="fund-fiat-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Fund Your Wallet With Fiat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <div id="first-area">
                    <form id="fiat-fund-area" >
                        <p>Select a payment method that suits you best</p>
                        <div class="mb-3 form-group">
                            <label class="form-label">Select list (select one):</label>
                            <select class="default-select form-control wide" id="pay-method" >
                                <option value="vpay">VPay (Card, Bank Transfer, etc)</option>
                                <option value="chipper" data-id="chipper">Chipper Cash</option>
                                <!-- <option value="giftcard" data-id="Gift">Gift Cards</option> -->
                                
                                <!-- <option value="SOLANA">SOLANA</option> -->
                                <!-- <option value="SHIBA INU">SHIBA INU</option>
                                <option value="DODGECOIN">DODGECOIN</option>
                                <option value="XRP">XRP</option>
                                <option value="TRX">TRX</option> -->
                            </select>
                        </div> <br> <br>
                        <div class="mb-3 form-group">
                            <input type="number" class="form-control" id="fiat-depo-amt" placeholder="Enter amount">
                        </div>
                        
                       
                        <!-- <small class="text-danger">error</small> -->
                        
                    </form>
                    <div id="chipper-cash-area" style="display: none;">
                        <p>
                        <small>Head to your Chipper cash wallet, copy the tag below and proceed with the transaction. After payment, upload a screenshot of the proof of payment. </small> <br>
                        </p>
                        <h4>Visa Direct Tag: tradeshrine</h4>
                        <h4> 4173 9600 5448 2037</h4>
                        <input type="file" name="" id="chipper-proof" style="display: none;">
                        <button type="button" class="btn btn-dark" id="complete-chipper">Upload Screehsot</button>
                    </div>
                </div>
                <div id="" class="text-center">
                    <p id="fiat-fund-error" class="text-danger"></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" id="fiat-fund-back">Back</button>
                <button type="button" class="btn btn-primary" id="fiat-proceed">Proceed</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="add-bank-details">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Bank Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form class="comment-form" id="add-account-details">
                    <input type="hidden" name="_token" value="AwIOLTjxBSE8Aqwh3lGpyh9i2ImL6pG6fhNpOfqx">
                    <div class="row"> 
                        <div class="form-group">
                            <div class="mb-3">
                                <label class="text-black font-w600 form-label">Choose Your Bank <span class="required">*</span></label>
                                <select  class="form-control" id="locality-dropdown" ></select>
                            </div>
                        </div>  
                        <div class="form-group">
                            <div class="mb-3">
                                <label class="text-black font-w600 form-label">Account Number <span class="required">*</span></label>
                                <input id="acc_gigits" type="number" required="" class="form-control p-2 " placeholder="Account Number ">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="text-black font-w600 form-label">Account Name <i style="display:none" id="find-loader" class="fa fa-spinner fa-spin"></i></label>
                                <p></p>
                                <input type="text" class="form-control p-2" placeholder="Account Name" id="acc_name" disabled>
                                <small id="acc_name_error"></small>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3 mb-0">
                                <p id="bank-error-reporting"></p>
                                <button id="bank-loader" style="display:none" class="btn btn-primary disabled"> <i   class="fa fa-spinner fa-spin"></i></button>
                                <input type="submit" value="Save" class="submit btn btn-primary" name="submit" id="bank-btn">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="sendMessageModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Make Withdrawal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form class="comment-form" id="w-form">
                    <div class="row"> 
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="text-black font-w600 form-label">Amount <span class="required">*</span></label>
                                <input type="text" class="form-control"   placeholder="0.00" id="w-amount">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="text-black font-w600 form-label">Withdrawal Method <span class="required">*</span></label>
                                <select class="form-control" id="w-method">
                                    <option value="bank">Bank Account</option>
                                    <option value="chipper">Chipper Cash</option>
                                    <option value="crypto">Crypto</option>
                                </select>
                            </div>
                        </div>
                        <div id="address-area" style="display: none;">
                            
                            <div class="mb-3 form-group">
                                <label class="form-label font-w600 text-black">Select list (select one):</label>
                                <select class="default-select form-control wide" id="w-coin-type" >
                                    <option value="BNB" data-id="BEP20">BNB (BEP20)</option>
                                    <option value="BTC" data-id="">BTC</option>
                                    <option value="ETH" data-id="ERC20">ETH (ERC20)</option>
                                    <option value="USDT" data-id="TRC20">USDT (TRC20)</option>
                                    <!-- <option value="SOLANA">SOLANA</option> -->
                                    <!-- <option value="SHIBA INU">SHIBA INU</option>
                                    <option value="DODGECOIN">DODGECOIN</option>
                                    <option value="XRP">XRP</option>
                                    <option value="TRX">TRX</option> -->
                                </select>
                            </div> <br><br>
                            <div class="col-lg-12" >
                                <div class="mb-3">
                                    <label class="text-black font-w600 form-label">wallet Address</label>
                                    <input  class="form-control" id="w-address" placeholder="Wallet address">
                                </div>
                            </div>
                        </div>
                        <div id="chipper-area" style="display: none;">
                            <div class="col-lg-12" >
                                <div class="mb-3">
                                    <label class="text-black font-w600 form-label">Chipper Cash Tag</label>
                                    <input  class="form-control" id="w-chipper-tag" placeholder="Chipper tag">
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-12">
                            <div class="mb-3 mb-0">
                                <p class="small tex-danger" id="w-report"></p>
                                <input type="submit" value="Continue" class="submit btn btn-primary" name="submit">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="ajax-loader" data-bs-keyboard="false" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="text-center mt-5" style="margin-left: auto; margin-right:auto;">
            <h1 class="m-auto">
                <i class="fa fa-spin fa-spinner text-warning display-1" style="margin: 0 auto;"></i>
            </h1>
        </div>
    </div>
</div>





