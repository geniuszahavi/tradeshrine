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
                    <form>
                        <div class="mb-3 form-group">
                            <label class="form-label">Select list (select one):</label>
                            <select class="default-select form-control wide" id="buy-coin-type" >
                                <option value="BNB" data-id="BEP20">BNB (BEP20)</option>
                                <option value="BTC" data-id=" ">BTC</option>
                                <option value="ETH" data-id="ERC20">ETH (ERC20)</option>
                                <option value="USDT" data-id="TRC20">USDT (TRC20)</option>
                                <!-- <option value="SOLANA">SOLANA</option> -->
                                <!-- <option value="SHIBA INU">SHIBA INU</option>
                                <option value="DODGECOIN">DODGECOIN</option>
                                <option value="XRP">XRP</option>
                                <option value="TRX">TRX</option> -->
                            </select>
                        </div> <br> <br>
                        <div class="mb-3 form-group">
                            <input type="number" class="form-control" id="buy-crypt-amt" placeholder="Enter amount">
                        </div>
                        <div class="mb-3 form-group">
                            <input type="text" class="form-control" id="buy-crypt-address" placeholder="Enter your wallet address">
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
                    <p>Select a payment method that suits you best</p>
                    <form>
                        <div class="mb-3 form-group">
                            <label class="form-label">Select list (select one):</label>
                            <select class="default-select form-control wide" id="pay-method" >
                                <option value="BNB">Bank Transfer (direct)</option>
                                <option value="BNB">Bank Transfer (direct)</option>
                                <option value="BNB" data-id="BEP20">Bank Transfer (direct)</option>
                                <option value="BTC" data-id=" ">BTC</option>
                                <option value="ETH" data-id="ERC20">ETH (ERC20)</option>
                                <option value="USDT" data-id="TRC20">USDT (TRC20)</option>
                                <!-- <option value="SOLANA">SOLANA</option> -->
                                <!-- <option value="SHIBA INU">SHIBA INU</option>
                                <option value="DODGECOIN">DODGECOIN</option>
                                <option value="XRP">XRP</option>
                                <option value="TRX">TRX</option> -->
                            </select>
                        </div> <br> <br>
                        <div class="mb-3 form-group">
                            <input type="number" class="form-control" id="buy-crypt-amt" placeholder="Enter amount">
                        </div>
                        <div class="mb-3 form-group">
                            <input type="text" class="form-control" id="buy-crypt-address" placeholder="Enter your wallet address">
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
                <button type="button" class="btn btn-primary" id="buy-crpt-proceed">Proceed</button>
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
