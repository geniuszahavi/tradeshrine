<?php 
$page_title = "User Account | Tradeshrine";
include 'ts_templates/head.php';
// print_r(($userDetails));
 
// if($userDetails['verified'] !== 1){
// 	header("Location: ./verify.php");
// 	echo $userDetails['email'];
//     exit();
// }

if (isset($_GET['amount'])) {
    $amount = htmlspecialchars($_GET['amount']); // Sanitize the input
    // Now you can use $amount
}else { 
	$amount = 0; 
}


$page_header = 'Fund With Crypto';


?>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <!-- <div id="loader">
	</div> -->
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
				<img src="images/logo/logo.png" class="logo-abbr" alt="">
				<img src="images/logo/logo-text.png" class="brand-title" alt="">
				<img src="images/logo/logo-color.png" class="logo-color" alt="">
				<img src="images/logo/logo-text-color.png" class="brand-title color-title" alt="">
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
					<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect x="22" y="11" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="11" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="22" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="11" y="11" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="11" y="22" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect width="4" height="4" rx="2" fill="#2A353A"/>
						<rect y="11" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="22" y="22" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect y="22" width="4" height="4" rx="2" fill="#2A353A"/>
					</svg>		
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
	
		
		<!--**********************************
            Header start
        ***********************************-->
        <?php include 'ts_templates/header.php'; ?>

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php include 'ts_templates/nav.php'; ?>

        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					
					<div class="col-xl-6">
						<div class="row">
							<div class="col-xl-12 col-sm-6">
								<div class="card h-auto">
									<div class="card-body px-0 pt-1">
										<div class="" id="buy-sell-area">
											<nav class="buy-sell">
											  <!-- <div class="nav nav-tabs" id="nav-tab2" role="tablist">
												<button class="nav-link active" id="nav-buy-tab" data-bs-toggle="tab" data-bs-target="#nav-buy" type="button" role="tab" aria-controls="nav-buy" aria-selected="true">buy</button>
												<button class="nav-link" id="nav-sell-tab" data-bs-toggle="tab" data-bs-target="#nav-sell" type="button" role="tab" aria-controls="nav-sell" aria-selected="false">sell</button>
											  </div> -->
											</nav>
											<div class="tab-content" id="nav-tabContent">
												<div class="tab-pane fade show active" id="nav-buy" role="tabpanel" aria-labelledby="nav-buy-tab">
													<nav class="limit-sell">
														
													</nav>
													<div class="tab-content" id="nav-tabContent1">
														<div class="tab-pane fade show active" id="nav-market-order1" role="tabpanel" aria-labelledby="nav-market-order-tab1">
														</div>
														<div class="tab-pane fade" id="nav-limit-order1" role="tabpanel" aria-labelledby="nav-limit-order-tab1">
														</div>
													</div>
													<div class="sell-element">
														<form id="sell-crypto-form">
															<div class="sell-blance">
																<label class="form-label text-primary">Choose Coin To Sell</label>

																<div class="input-group">
                                                                    
                                                                    <select name="" id="sell-cointype" class="form-control">
                                                                        <option value="USDC" data-id="USDC">USDC (USDC)</option>
                                                                        <option value="BTC" data-id="">BTC</option>
                                                                        <option value="ETH" data-id="ERC20">ETH (ERC20)</option>
                                                                        <option value="USDT" data-id="TRC20">USDT (TRC20)</option>
                                                                    </select>
                                                                    <span class="input-group-text"> <img id="sell-coin-image" src="images/btc-logo.png" width="30" alt=""></span>
																	
																</div>
															</div>
															<div class="sell-blance">
																<label class="form-label text-primary">Amount</label>
																<div class="input-group">
																	<input type="number" id="sell-coin-amount" class="form-control" value="<?php echo $amount; ?>">
																	<span class="input-group-text">$</span>
																</div>
															</div>
															<!-- <div class="sell-blance">
																<label class="form-label text-primary">Wallet Address</label>
																<div class="input-group">
																	<input type="text" id="sell-coin-address" class="form-control" placeholder="Wallet Address">
																</div>
															</div> -->
                                                            <div class="sell-blance">
																<!-- <label class="form-label text-primary"><b>Fee</b>: 1.7% </label> -->
																<div class="form-label blance"><span>Amount To Send:</span>$<p id="sell-coin-total">0.00</p></div><br>
                                                                <!-- <p class="text-justify"><small>Ensure you provide a wallet address for the exact coin and network type you select. Sending anything else may result at a loss.</small></p> -->
															</div>
															<p><small id="sell-crypto-report"></small></p>
															<div class="text-center">
                                                                <p class="small text-danger" id="sell-crypto-report"></p>
																<button id="sell-coin-btn" class="btn btn-primary w-75">Proceed <span id="sell-coin-name"></span></button>
															</div>	
														</form>
													</div>
											  
												</div>
												<div class="tab-pane fade" id="nav-sell" role="tabpanel" aria-labelledby="nav-sell-tab">
													
													<div class="tab-content" id="nav-tabContent2">
													  <div class="tab-pane fade show active" id="nav-market-order" role="tabpanel" aria-labelledby="nav-market-order-tab"></div>
													  <div class="tab-pane fade" id="nav-limit-order" role="tabpanel" aria-labelledby="nav-limit-order-tab">...</div>
													</div>
													<div class="sell-element">
														<form id="sell-crypto-form">
															<div class="sell-blance">
																<label class="form-label text-primary">Choose Coin To Sell</label>

																<div class="input-group">
                                                                    
                                                                    <select name="" id="sell-cointype" class="form-control">
                                                                        <option value="USDC" data-id="USDC">USDC (USDC)</option>
                                                                        <option value="BTC" data-id="">BTC</option>
                                                                        <option value="ETH" data-id="ERC20">ETH (ERC20)</option>
                                                                        <option value="USDT" data-id="TRC20">USDT (TRC20)</option>
                                                                    </select>
                                                                    <span class="input-group-text"> <img id="sell-coin-image" src="images/btc-logo.png" width="30" alt=""></span>
																	
																</div>
															</div>
															<div class="sell-blance">
																<label class="form-label text-primary">Amount</label>
																<div class="input-group">
																	<input type="number" id="sell-coin-amount" class="form-control" placeholder="Amount">
																	<span class="input-group-text">$</span>
																</div>
															</div>
															<!-- <div class="sell-blance">
																<label class="form-label text-primary">Wallet Address</label>
																<div class="input-group">
																	<input type="text" id="sell-coin-address" class="form-control" placeholder="Wallet Address">
																</div>
															</div> -->
                                                            <div class="sell-blance">
																<!-- <label class="form-label text-primary"><b>Fee</b>: 1.7% </label> -->
																<div class="form-label blance"><span>Amount To Send:</span>$<p id="sell-coin-total">0.00</p></div><br>
                                                                <!-- <p class="text-justify"><small>Ensure you provide a wallet address for the exact coin and network type you select. Sending anything else may result at a loss.</small></p> -->
															</div>
															<p><small id="sell-crypto-report"></small></p>
															<div class="text-center">
                                                                <p class="small text-danger" id="sell-crypto-report"></p>
																<button id="sell-coin-btn" class="btn btn-primary w-75">Sell <span id="sell-coin-name"></span></button>
															</div>	
														</form>
													</div>	
												</div>
											</div>
										</div>

										<!-- Result area -->
										<div class="" id="buy-sell-result" style="display: none;">
											
											<div class="tab-content" id="nav-tabContent">
												<div class="tab-pane fade show active" id="nav-buy" role="tabpanel" aria-labelledby="nav-buy-tab">
													<nav class="limit-sell">
														
													</nav>
													<div class="tab-content" id="nav-tabContent1">
														<div class="tab-pane fade show active" id="nav-market-order1" role="tabpanel" aria-labelledby="nav-market-order-tab1">
														</div>
														<div class="tab-pane fade" id="nav-limit-order1" role="tabpanel" aria-labelledby="nav-limit-order-tab1">
														</div>
													</div>
													<div class="sell-element">
														
															<h4>Confirm</h4>
															<p>You're about to purchase <b> <span class="coin-value-buy"></span></b> of <b><span class="coin-name-buy">BTC</span></b>. For this, a total of <b>$<span class="buy-coin-amount"></span></b> will be deducted from your Tradeshrine wallet.</p>
															<p>After that, the wallet address you provided will be credited within 5 - 30 minutes.</p>
															
														<div class="sell-blance">
															<!-- <label class="form-label text-primary"><b>Fee</b>: 1.7% </label> -->
															<p></p>
														</div>
														<div class="text-">
															<p class="small text-danger" id="buy-crypto-report"></p>
															<button class="btn btn-dark">Back</button>
															<button id="complete-crypto-purchase" class="btn btn-primary w-75">Continue <span id="buy-coin-name"></span></button>
														</div>	
													</div>	
											  
												</div>
											
											</div>
										</div>

										<div class="" id="sell-sell-result" style="display: none;">
											
											<div class="tab-content" id="nav-tabContent">
												<div class="tab-pane fade show active" id="nav-buy" role="tabpanel" aria-labelledby="nav-buy-tab">
													<nav class="limit-sell">
														
													</nav>
													<div class="tab-content" id="nav-tabContent1">
														<div class="tab-pane fade show active" id="nav-market-order1" role="tabpanel" aria-labelledby="nav-market-order-tab1">
														</div>
														<div class="tab-pane fade" id="nav-limit-order1" role="tabpanel" aria-labelledby="nav-limit-order-tab1">
														</div>
													</div>
													<div class="sell-element" id="crypto-sell-area">
														
														<div class="text-center mt-4">
																<h4 id="sell-timer"></h4>
																<img src="" alt="" id="sell-coin-image-qr" width="200">

															</div>
															<h6 class="text-center" id="sell-coin-address-display"></h6>
															<p class="text-center">  Send only <b> 
																
															<span class="coin-name-sell"></span></b> (<span class="sell-coin-network"></span>) to the address provided. Sending any other coin or network will result on loss.</p>
															<h5 class="text-center">Sub-total: <span class="sell-coin-amount"></span></b> </h5>
															<h5 class="text-center">Coin Value: <span class="coin-value-sell"></span></h5>
															
														<div class="sell-blance">
															<!-- <label class="form-label text-primary"><b>Fee</b>: 1.7% </label> -->
															<p></p>
														</div>
														<div class="text-center">
															<p class="small text-danger" id="buy-crypto-report"></p>
															<!-- <button class="btn btn-dark">Back</button> -->
															<input style="display:none" type="file" name="" id="crypto-proof">
															<small id="sell-crypto-report" class="text-danger"></small>
															<button id="complete-crypto" class="btn btn-primary w-75">Upload Proof <span id="buy-coin-name"></span></button>
														</div>	
													</div>	
													<div id="sell-crypto-text"  style="padding:12px; display:none">
														<h6 class="text-success">Processing</h6>
														<p>Transaction initiated and currently processing. </p>
													</div>
											  
												</div>
											
											</div>
										</div>



									</div>
								</div>
							</div>
							
							
						</div>
					</div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
		
		
		
        <!--**********************************
            Footer start
        ***********************************-->
        <?php include 'ts_templates/footer.php'; ?>

        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->
		
        <!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
   <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	
	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>
	<script src="vendor/swiper/js/swiper-bundle.min.js"></script>
	<!-- <script src="./s3.tradingview.com/tv.js"></script> -->
	<!-- <script src="./cdnjs.cloudflare.com/ajax/libs/wnumb/1.2.0/wNumb.min.js"></script> -->
	<!-- <script src="./cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.js"></script> -->
	<script src="vendor/raphael/raphael.min.js"></script>
	<script src="vendor/morris/morris.min.js"></script>
	
	<!-- Dashboard 1 -->
	<!-- <script src="js/dashboard/dashboard-1.js"></script> -->
    <script src="js/custom.js"></script>
	<script src="js/deznav-init.js"></script>
	<!-- <script src="js/dashboard/tradingview-2.js"></script> -->
	<script src="js/demo.js"></script>
	<script src="js/functions.js"></script>
    <script src="js/shrine.js"></script>
	
</body>


</html>