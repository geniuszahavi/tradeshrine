<div class="modal fade" id="deposit-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Trade Crypto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <div id="first-area">
                    <p>What asset would you be trading?</p>
                    <form>
                        <div class="mb-3 form-group">
                            <label class="form-label">Select list (select one):</label>
                            <select class="default-select form-control wide" id="coin-type" >
                                <option value="BNB">BNB</option>
                                <option value="BTC">BTC</option>
                                <option value="ETH">ETH</option>
                                <option value="USDT">USDT</option>
                                <option value="SOLANA">SOLANA</option>
                                <option value="SHIBA INU">SHIBA INU</option>
                                <option value="DODGECOIN">DODGECOIN</option>
                                <option value="XRP">XRP</option>
                                <option value="TRX">TRX</option>
                            </select>
                        </div> <br> <br>
                        <div class="mb-3 form-group">
                            <input type="number" class="form-control" id="crypt-amt" placeholder="Enter amount">
                        </div>
                       
                        <!-- <small class="text-danger">error</small> -->
                        
                    </form>
                </div>
                <div id="" class="text-center">
                    <p class="funding-error" class="text-danger">namsbd</p>
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

            <div id="pay-complete" class="text-center" style="display: none;">
                <input type="file" id="chosen-file" >
                <div id="choose-image">
                    <p class="mt-2">Upload screenshot/receipt</p>
                </div>
            </div>
                
                <div id="second-area" class="text-center ">
                    <p>Send only <span id="coin-to-send"></span> to the address below</p>
                    <img src="public/qr/btc.png" alt="">
                    <p>
                        <span id="coin-address" data-id=""></span> 
                        <i class="fa fa-copy" id="copy-wallet"></i>
                    </p> 
                    <h4 id="coin-amt" class="text-center"></h4>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="complete-crypto">I completed this transaction</button>
            </div>
        </div>
    </div>
</div>
