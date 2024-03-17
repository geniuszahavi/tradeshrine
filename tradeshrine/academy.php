<?php 
$page_title = "User Account | Tradeshrine";
include 'ts_templates/head.php';
// print_r(($userDetails));
 
if($userDetails['verified'] !== 1){
	header("Location: ./verify.php");
	echo $userDetails['email'];
    exit();
}

$page_header = 'Academy'; 



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
                <div class="col-xl-4  col-lg-6">
                        <div class="card">
                            <div class="card-header border-0 pb-0">
                                <h4 class="card-title">INTRODUCTION</h4>
                            </div>
                            <div class="card-body p-0">
                                <div id="DZ_W_TimeLine" class="widget-timeline dz-scroll height370 my-4 px-4">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-badge primary"></div>
                                            <a class="timeline-panel " href="#">
                                                <span>Course Duration: 1 Month</span>
                                                <p class="mb-0">FEE: $50</p>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning"></div>
                                            <a class="timeline-panel " href="#">
                                                <h6 class="mb-0">Understanding Blockchain Technology</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel " href="#">
                                                <!-- <span>20 minutes ago</span> -->
                                                <h6 class="mb-0">What is a currency pair?</strong></h6>
												
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel " href="#">
                                                <!-- <span>30 minutes ago</span> -->
                                                <h6 class="mb-0">What is profit and loss (P&L)</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel" href="#">
                                                <!-- <span>15 minutes ago</span> -->
                                                <h6 class="mb-0">How to calculate profit (%) </h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel" href="#">
                                                <h6 class="mb-0">What is leverage/Margin and how does it work </h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel" href="#">
                                                <h6 class="mb-0">Different types of Exchanges and how they work.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel" href="#">
                                                <h6 class="mb-0">Master a trading platform (Binance, Tradeshrine & Tradeview)</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge info">
                                            </div>
                                            <a class="timeline-panel" href="#">
                                                <h6 class="mb-0">What is Long vs Short in trading.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge primary">
                                            </div>
                                            <a class="timeline-panel" href="#">
                                                <h6 class="mb-0">What are the entries, stops & Target.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel" href="#">
                                                <h6 class="mb-0">Types of orders in trading.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel" href="#">
                                                <h6 class="mb-0">How to place entries, stops and targets.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel" href="#">
                                                <h6 class="mb-0">Different position sizes.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel" href="#">
                                                <h6 class="mb-0">How to calculate Market rate </h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel" href="#">
                                                <h6 class="mb-0">What is order book and how does it work.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel" href="#">
                                                <h6 class="mb-0">Understanding digital currency</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel" href="#">
                                                <h6 class="mb-0">What is a wallet?</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel" href="#">
                                                <h6 class="mb-0">Uses of wallets </h6>
                                            </a>
                                        </li>

                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel" href="#">
                                                <h6 class="mb-0">Advantages/disadvantages of wallets/digital currency.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel" href="#">
                                                <h6 class="mb-0">Market/digital customers. </h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel" href="#">
                                                <h6 class="mb-0">Who is a trader.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel" href="#">
                                                <h6 class="mb-0">How to be a successful trader</h6>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                                
                            </div>
                            <button class="btn btn-success subscribe-btn" data-id="1" >ENRROL ($50)</button>
                        </div>
					</div>
					<div class="col-xl-4  col-lg-6">
                        <div class="card">
                            <div class="card-header border-0 pb-0">
                                <h4 class="card-title">ADVANCE STUDIES </h4>
                            </div>
                            <div class="card-body p-0">
                                <div id="DZ_W_TimeLine11" class="widget-timeline dz-scroll  height370 my-4 px-4">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-badge primary"></div>
                                            <a class="timeline-panel" href="#">
                                                <span>Course Duration: 1-6 Months</span>
                                                <p>FEE: $100</p>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge info">
                                            </div>
                                            <a class="timeline-panel" href="#">
                                                <h6 class="mb-0">Trading Spot</h6>
												
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge danger">
                                            </div>
                                            <a class="timeline-panel" href="#">
                                                <h6 class="mb-0">Trading Futures </h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge success">
                                            </div>
                                            <a class="timeline-panel " href="#">
                                                <h6 class="mb-0">Becoming A lead or Copy trader.. </h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel " href="#">
                                                <h6 class="mb-0">⁠Online and offline trades (P2P)</h6>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <button class="btn btn-success subscribe-btn" data-id="2" >ENRROL ($100)</button>
                        </div>
					</div>
					<div class="col-xl-4  col-lg-6">
                        <div class="card">
                            <div class="card-header border-0 pb-0">
                                <h4 class="card-title">TECHNICAL ANALYSIS </h4>
                            </div>
                            <div class="card-body p-0">
                                <div id="DZ_W_TimeLine11" class="widget-timeline dz-scroll  height370 my-4 px-4">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-badge primary"></div>
                                            <a class="timeline-panel" href="#">
                                                <span>Duration: | LIFETIME  MENTORSHIP</span>
                                                <p>FLIGHT TICKET | VIP SIGNALS </p>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge info">
                                            </div>
                                            <a class="timeline-panel" href="#">
                                                <h6 class="mb-0">Candle stick pattern</h6>
												
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge danger">
                                            </div>
                                            <a class="timeline-panel" href="#">
                                                <h6 class="mb-0">Indicators (Bollinger bands, hybrid Ema, RSI, MA, Support, Resistance) </h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge success">
                                            </div>
                                            <a class="timeline-panel " href="#">
                                                <h6 class="mb-0">Entry , Stop loss & Take profits </h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel " href="#">
                                                <h6 class="mb-0">Identifying trends</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel " href="#">
                                                <h6 class="mb-0">⁠Chart patterns </h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel " href="#">
                                                <h6 class="mb-0">Breakout patterns</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel " href="#">
                                                <h6 class="mb-0">Strategy (Scalping, Day trading & Swing trading)</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel " href="#">
                                                <h6 class="mb-0">Trading Psychology </h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel " href="#">
                                                <h6 class="mb-0">Risk Management</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel " href="#">
                                                <h6 class="mb-0"> ⁠Break and Retest Strategy</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel " href="#">
                                                <h6 class="mb-0">⁠ ⁠C.E.S.T (Rules to remain profitable)</h6>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <button class="btn btn-success subscribe-btn" data-id="3" >Subscribe ($300)</button>
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

    <!-- modal -->
    <div class="modal fade" id="pay-method-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Payment Method</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body" id="pay-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12" id="make-payment-area">
                                <p>How do you want to make your payment</p>
                                <div class="mb-3 form-group">
                                    <label class="form-label">Select list (select one):</label>
                                    <select class="default-select form-control wide" id="aca-pay-method" >
                                        <option value="vpay">VPay (Card, Bank Transfer, etc)</option>
                                        <!-- <option value="chipper" data-id="chipper">Chipper Cash</option> -->
                                        <option value="wallet" data-id="wallet">Shrine Wallet</option>
                                        
                                        <!-- <option value="SOLANA">SOLANA</option> -->
                                        <!-- <option value="SHIBA INU">SHIBA INU</option>
                                        <option value="DODGECOIN">DODGECOIN</option>
                                        <option value="XRP">XRP</option>
                                        <option value="TRX">TRX</option> -->
                                    </select>
                                </div> <br> <br>
                                                                  
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                <p class="container mb-3">
                    <small class="text-danger" id="pay-method-error"></small>

                </p>  
                <div class="modal-footer" id="pay-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="pay-method-btn" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <input type="hidden" name="" id="hidden-email" value="<?php echo $userDetails['email']; ?>">
    <input type="hidden" name="" id="hidden-phone" value="<?php echo $userDetails['phone']; ?>">


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
	
	<!-- Dashboard 1 -->
	<!-- <script src="js/dashboard/dashboard-1.js"></script> -->
	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>
	<script src="vendor/swiper/js/swiper-bundle.min.js"></script>
	<!-- <script src="../../s3.tradingview.com/tv.js"></script> -->
	<script src="./cdnjs.cloudflare.com/ajax/libs/wnumb/1.2.0/wNumb.min.js"></script>
	<script src="./cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.js"></script>
	<script src="vendor/raphael/raphael.min.js"></script>
	<script src="vendor/morris/morris.min.js"></script>
	
    <script src="js/custom.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/functions.js"></script>
	<script src="js/shrine.js"></script>
    <!-- <script src="js/styleSwitcher.js"></script> -->
	<!-- <script src="js/dashboard/tradingview-1.js"></script> -->
	<script src="https://dropin.vpay.africa/dropin/v1/initialise.js"></script>

	
</body>


</html>