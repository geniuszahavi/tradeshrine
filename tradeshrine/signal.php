<?php 
$page_title = "User Account | Tradeshrine";
include 'ts_templates/head.php';
// print_r(($userDetails));
 
if($userDetails['verified'] !== 1){
	header("Location: ./verify.php");
	echo $userDetails['email'];
    exit();
}

$page_header = 'VIP Trading Signals'; 



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
					<div class="col-xl-8">
						<div class="row">
							<div class="col-xl-12">
								<div class="card bubles">
									<div class="card-body">
										<div class="buy-coin  bubles-">
											<div>
												<h2>Trade the market with DeOracle's Guide</h2>
												<p>Why would you be worried about loosing your money when you have an expert do the analysis for you? Let us watch the waters while you make your profit.</p>
												<!-- <a href="trade-signals.php" class="btn btn-primary">See Signals</a> -->
												<button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#start-signal">Start Signal</button>
											</div>
											<div class="coin-img">
												<img src="images/coin.png" class="img-fluid" alt="">
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<div class="col-xl-4">
						<div class="card card-wiget">
							<div class="card-body">
								<div class="card-wiget-info rewards">
									<h4 class="count-num">Status</h4>
									<p>Your subscription to VIP Signals is active</p>
									<div>
										<span class="text-primary">12 days left</span>
									</div> 
									<div class="d-flex align-items-baseline reward-earn">
										<h2 class="me-2">25%</h2>
										<span>until subsccription expires</span>
									</div>
									<div class="progress-box">
										<div class="progress">
											<div class="progress-bar bg-primary" style="width:50%; height:7px; border-radius:4px;" role="progressbar"></div>
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

		
			<!-- Modal -->
			<div class="modal fade" id="start-signal">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Activate VIP Signal</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal">
							</button>
						</div>
						<div class="modal-body">
							<p>Choose your preferred signal subscription</p>
							<form id="signal-subscription-form" action="signal-sub-form">
								<div class="form-group">
									<select id="subscription-select" class="default-select form-control wide mb-3 form-control-lg">
										<option value="1" data-price="10">1 Month VIP Signals - $10</option>
										<option value="2" data-price="20">3 Months VIP Signals - $20</option>
										<option value="3" data-price="50">6 Months VIP Signals - $50</option>
										<option value="4" data-price="100">12 Months VIP Signals - $100</option>
										<option value="5" data-price="200">Lifetime - $200</option>
									</select>
								</div>
							</form>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Cancel</button>
								<button type="button" class="btn btn-primary" id="activate-signal">Activate Signals</button>
							</div>
					</div>
				</div>
			</div>
		
		
		
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
	<script src="js/shrine.js"></script>
    <!-- <script src="js/styleSwitcher.js"></script> -->
    <!-- <script src="js/styleSwitcher.js"></script> -->
	<!-- <script src="js/dashboard/tradingview-1.js"></script> -->
	
</body>


</html>