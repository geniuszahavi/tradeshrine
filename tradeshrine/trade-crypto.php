<?php 
$page_title = "User Account | Tradeshrine";
include 'ts_templates/head.php';
// print_r(($userDetails));
 
if($userDetails['verified'] !== 1){
	header("Location: ./verify.php");
	echo $userDetails['email'];
    exit();
}


$page_header = 'Buy & Sell';


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
					
					<div class="col-xl-5">
						<div class="row">
							<div class="col-xl-12 col-sm-6">
								<div class="card h-auto">
									<div class="card-body px-0 pt-1">
										<div class="">
											<nav class="buy-sell">
											  <div class="nav nav-tabs" id="nav-tab2" role="tablist">
												<button class="nav-link active" id="nav-buy-tab" data-bs-toggle="tab" data-bs-target="#nav-buy" type="button" role="tab" aria-controls="nav-buy" aria-selected="true">buy</button>
												<button class="nav-link" id="nav-sell-tab" data-bs-toggle="tab" data-bs-target="#nav-sell" type="button" role="tab" aria-controls="nav-sell" aria-selected="false">sell</button>
											  </div>
											</nav>
											<div class="tab-content" id="nav-tabContent">
												<div class="tab-pane fade show active" id="nav-buy" role="tabpanel" aria-labelledby="nav-buy-tab">
													<nav class="limit-sell">
														<!-- <div class="nav nav-tabs" id="nav-tab3" role="tablist">
															<button class="nav-link active" id="nav-market-order-tab1" data-bs-toggle="tab" data-bs-target="#nav-market-order1" type="button" role="tab" aria-controls="nav-market-order1" aria-selected="true">Bulk order</button>
															<button class="nav-link" id="nav-limit-order-tab1" data-bs-toggle="tab" data-bs-target="#nav-limit-order1" type="button" role="tab" aria-controls="nav-limit-order1" aria-selected="false">Unit order</button>
													  </div> -->
													</nav>
													<div class="tab-content" id="nav-tabContent1">
														<div class="tab-pane fade show active" id="nav-market-order1" role="tabpanel" aria-labelledby="nav-market-order-tab1">
														</div>
														<div class="tab-pane fade" id="nav-limit-order1" role="tabpanel" aria-labelledby="nav-limit-order-tab1">
														</div>
													</div>
													<div class="sell-element">
														<form id="buy-crypto-form">
															<div class="sell-blance">
																<label class="form-label text-primary">Choose Coin To Sell</label>

																<div class="input-group">
                                                                    
                                                                    <select name="" id="buy-cointype" class="form-control">
                                                                        <option value="BNB" data-id="BEP20">BNB (BEP20)</option>
                                                                        <option value="BTC" data-id="">BTC</option>
                                                                        <option value="ETH" data-id="ERC20">ETH (ERC20)</option>
                                                                        <option value="USDT" data-id="TRC20">USDT (TRC20)</option>
                                                                    </select>
                                                                    <span class="input-group-text"> <img id="coin-image" src="images/btc-logo.png" width="30" alt=""></span>
																	
																</div>
															</div>
															<div class="sell-blance">
																<label class="form-label text-primary">Amount</label>
																<div class="input-group">
																	<input type="number" id="buy-coin-amount" class="form-control" placeholder="Amount">
																	<span class="input-group-text">$</span>
																</div>
															</div>
															<div class="sell-blance">
																<label class="form-label text-primary">Wallet Address</label>
																<div class="input-group">
																	<input type="text" id="buy-coin-address" class="form-control" placeholder="Wallet Address">
																</div>
															</div>
                                                            <div class="sell-blance">
																<label class="form-label text-primary"><b>Fee</b>: 1.7% </label>
																<div class="form-label blance"><span>Total:</span>$<p id="buy-coin-total">0.00</p></div><br>
                                                                <p class="text-justify"><small>Ensure you provide a wallet address for the exact coin and network type you select. Sending anything else may result at a loss.</small></p>
															</div>
															<div class="text-center">
                                                                <p class="small text-danger" id="buy-crypto-report"></p>
																<button id="buy-coin-btn" class="btn btn-primary w-75">BUY <span id="buy-coin-name"></span></button>
															</div>	
														</form>
													</div>	
											  
												</div>
												<div class="tab-pane fade" id="nav-sell" role="tabpanel" aria-labelledby="nav-sell-tab">
													<nav class="limit-sell">
														<div class="nav nav-tabs" id="nav-tab4" role="tablist">
															<button class="nav-link active" id="nav-market-order-tab" data-bs-toggle="tab" data-bs-target="#nav-market-order" type="button" role="tab" aria-controls="nav-market-order" aria-selected="true">market order</button>
															<button class="nav-link" id="nav-limit-order-tab" data-bs-toggle="tab" data-bs-target="#nav-limit-order" type="button" role="tab" aria-controls="nav-limit-order" aria-selected="false">limit order</button>
													  </div>
													</nav>
													<div class="tab-content" id="nav-tabContent2">
													  <div class="tab-pane fade show active" id="nav-market-order" role="tabpanel" aria-labelledby="nav-market-order-tab"></div>
													  <div class="tab-pane fade" id="nav-limit-order" role="tabpanel" aria-labelledby="nav-limit-order-tab">...</div>
													</div>
													<div class="sell-element">
														<form>
															<div class="sell-blance">
																<label class="form-label text-primary">Price</label>
																<div class="form-label blance"><span>BALANCE:</span><p>$3,123.9</p></div>
																<div class="input-group">
																	<input type="text" class="form-control" placeholder="0.00">
																	<span class="input-group-text">USDT</span>
																</div>
															</div>
															<div class="sell-blance">
																<label class="form-label text-primary">Amount</label>
																<div class="input-group">
																	<input type="text" class="form-control" placeholder="Amount">
																	<span class="input-group-text">BTC</span>
																</div>
															</div>
															<div class="sell-blance">
																<label class="form-label text-primary">Total</label>
																<div class="input-group">
																	<input type="text" class="form-control" placeholder="Total">
																	<span class="input-group-text">USDT</span>
																</div>
															</div>
															<div class="slider-wrapper">
															  <div id="employees1"></div>
															</div>
															<div class="text-center">
																<a href="exchange.html" class="btn btn-primary w-75">SELL BTC</a>
															</div>	
														</form>
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
	<script src="js/dashboard/tradingview-2.js"></script>
	<script src="js/demo.js"></script>
    <script src="js/shrine.js"></script>
	
</body>


</html>