<?php 
$page_title = "User Account | Tradeshrine";
include 'templates/head.php';
 
if($userDetails['verified'] == 0){
	header("Location: ./verify.php");
    exit();
}



?>
<body data-theme-version="">


    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="">
			<span><i class="h1 fa fa-spin fa-spinner "></i></span>
			
		</div>
    </div>
   

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <?php include 'templates/header.php'; ?>
        <!--**********************************
            Sidebar end
        ***********************************-->
				<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body ">
            <!-- row -->
			<div class="container-fluid">
	<div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
		<h2 class="font-w600 mb-2 me-auto">Dashboard</h2>
		
		
	</div>	
	<div class="row">
		<div class="col-xl-3 col-xxl-6 col-sm-6">
			<div class="card">
				<div class="card-body d-flex">
					<div class="icon me-3">
					
					</div>
					<div>
						<h2 class="invoice-num">$<?php echo number_format($userDetails['wallet'], 2); ?></h2>
						<p class="mb-0 invoice-num1">
							<svg width="21" height="14" viewBox="0 0 21 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 13C1.91797 11.9157 4.89728 8.72772 6.5 7L12.5 10L19.5 1" stroke="#13B440" stroke-width="2" stroke-linecap="round"/>
							</svg>
							 <span class="text-success" id="fund-wallet-btn" onclick="$('#fund-fiat-modal').modal('show')">Fund Wallet</span>
						</p>
						<!-- <button class="mt-5 btn btn-success btn-small" id="advanced-trading" data-bs-toggle="modal" data-bs-target="#deposit-modal">Trade Now</button> -->
						

					</div>
					
				</div>
			</div>
		</div>
		
		<div class="col-xl-3 col-xxl-6 col-sm-6">
			<div class="card">
				<div class="card-body d-flex">
					
					<div>
						<h2 class="invoice-num">$<?php echo $userDetails['referral_wallet'];  ?></h2>
						<p class="mb-0">
							<svg width="21" height="14" viewBox="0 0 21 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 13C1.91797 11.9157 4.89728 8.72772 6.5 7L12.5 10L19.5 1" stroke="#13B440" stroke-width="2" stroke-linecap="round"/>
							</svg>
							 Referral Bonus
						</p>
						

					</div>
				</div>
			</div>
		</div>
		
	</div>
	
	<div class="row">
		<div class="col-xl-6 col-lg-12">
			<div class="card" id="sell-crypto-div">
				
				<div class="widget-media" >
					<ul class="timeline">
						<li>
							<div class="timeline-panel">
								<div class="media me-2 media-info p-2">
									<img src="public/images/Download.gif" width="30" alt="" >
								</div>
								<div class="media-body">
									<h5 class="mb-1"><i></i> Sell Crypto </h5>
									<small class="d-block">BTC, BNB, ETH, USDT, </small>
								</div>
								
							</div>
						</li>
						
						
					</ul>	
				</div>
				
			</div>
		</div>
		<div class="col-xl-6 col-lg-12">
			<div class="card"  id="sell-giftcard-div">
				
				<div class="widget-media">
					<ul class="timeline">
						<li>
							<div class="timeline-panel">
								<div class="media me-2 media-info p-2">
									<img src="public/images/gift-card.png" width="30" alt="" >
								</div>
								<div class="media-body">
									<h5 class="mb-1"><i></i> Sell Gift Cards With </h5>
									<small class="d-block">Tradehsrine Wallet, Bank, Card, etc </small>
								</div>
								
							</div>
						</li>
						
						
					</ul>	
				</div>
				
			</div>
		</div>
		<div class="col-xl-6 col-lg-12">
			<div class="card" id="buy-crypto">
				
				<div class="widget-media">
					<ul class="timeline">
						<li>
							<div class="timeline-panel">
								<div class="media me-2 media-info p-2">
									<img src="public/images/Upload.gif" width="30" alt="" >
								</div>
								<div class="media-body">
									<h5 class="mb-1"><i></i> Buy Crypto With</h5>
									<small class="d-block">Wallet, Card, Transfer, Chipper Cash</small>
								</div>
								
							</div>
						</li>
						
						
					</ul>	
				</div>
				
			</div>
		</div>
	</div>
		
	<div class="row">
		<div class="col-xl-4 col-xxl-6 col-lg-6">
			<div class="card">
				<div class="card-header border-0 pb-0">
					<h4 class="card-title">FUNDAMENTALS PACKAGE</h4>
					<p>$100</p>
				</div>
				<div class="card-body">
					<div id="DZ_W_TimeLine" class="widget-timeline dz-scroll height370">
						<ul class="timeline">
							<li>
								<div class="timeline-badge primary"></div>
								<a class="timeline-panel text-muted" href="#">
									<span>Module 1</span>
									<h6 class="mb-0">Understanding digital currency & exchange companies </h6>
								</a>
							</li>
							<li>
								<div class="timeline-badge info">
								</div>
								<a class="timeline-panel text-muted" href="#">
									<span>Module 2</span>
									<h6 class="mb-0">What is a wallet & uses of wallets</h6>
									<!-- <p class="mb-0">Quisque a consequat ante Sit amet magna at volutapt...</p> -->
								</a>
							</li>
							<li>
								<div class="timeline-badge danger">
								</div>
								<a class="timeline-panel text-muted" href="#">
									<span>Module 2</span>
									<h6 class="mb-0">Advantages/disadvantages of wallets/digital currency</h6>
								</a>
							</li>
							<li>
								<div class="timeline-badge success">
								</div>
								<a class="timeline-panel text-muted" href="#">
									<span>Module 3</span>
									<h6 class="mb-0"> Market/digital customers or users</h6>
								</a>
							</li>
							<li>
								<div class="timeline-badge warning">
								</div>
								<a class="timeline-panel text-muted" href="#">
									<span>Module 4</span>
									<h6 class="mb-0">Who is a trader?</h6>
								</a>
							</li>
							<li>
								<div class="timeline-badge dark">
								</div>
								<a class="timeline-panel text-muted" href="#">
									<span>Module 5</span>
									<h6 class="mb-0">How to be a successful trader</h6>
								</a>
							</li>
							<li>
								<div class="timeline-badge dark">
								</div>
								<a class="timeline-panel text-muted" href="#">
									<span>Module 6</span>
									<h6 class="mb-0">How to create a trading offer/arrange your goods for buyers.</h6>
								</a>
							</li>
							<li>
								<div class="timeline-badge dark">
								</div>
								<a class="timeline-panel text-muted" href="#">
									<span>Module 7</span>
									<h6 class="mb-0">How to calculate market rates</h6>
								</a>
							</li>
						</ul>
					</div>
					<button class="mt-5 btn btn-warning" id="basic-trading">Get Started</button>

				</div>
			</div>
		</div>
		<div class="col-xl-4 col-xxl-6 col-lg-6">
			<div class="card">
				<div class="card-header border-0 pb-0">
					<h4 class="card-title">ADVANCED PACKAGE </h4>
					<p>$500</p>
				</div>
				<div class="card-body">
					<div id="DZ_W_TimeLine11" class="widget-timeline dz-scroll style-1 height370">
						<ul class="timeline">
							<li>
								<div class="timeline-badge primary"></div>
								<a class="timeline-panel text-muted" href="#">
									<span>Module 1</span>
									<h6 class="mb-0">Gift card trading  </h6>
								</a>
							</li>
							<li>
								<div class="timeline-badge primary"></div>
								<a class="timeline-panel text-muted" href="#">
									<span>Module 2</span>
									<h6 class="mb-0">Trading spot  </h6>
								</a>
							</li>
							<li>
								<div class="timeline-badge info">
								</div>
								<a class="timeline-panel text-muted" href="#">
									<span>Module 3</span>
									<h6 class="mb-0">Becoming a lead or copy trader </h6>
								</a>
							</li>
							<li>
								<div class="timeline-badge danger">
								</div>
								<a class="timeline-panel text-muted" href="#">
									<span>Module 4</span>
									<h6 class="mb-0"> How to use a signal to place a trade </h6>
								</a>
							</li>
							<li>
								<div class="timeline-badge success">
								</div>
								<a class="timeline-panel text-muted" href="#">
									<span>Module 5</span>
									<h6 class="mb-0">Online and offline trades (P2P) </h6>
								</a>
							</li>
							<li>
								<div class="timeline-badge warning">
								</div>
								<a class="timeline-panel text-muted" href="#">
									<span>Module 6</span>
									<h6 class="mb-0">Using indications to trade.</h6>
								</a>
							</li>
							<li>
								<div class="timeline-badge dark">
								</div>
								<a class="timeline-panel text-muted" href="#">
									<span>Module 7</span>
									<h6 class="mb-0">Accurate trading signal ($100 per month).</h6>
								</a>
							</li>
						</ul>
					</div>
					<button class="mt-5 btn btn-warning" id="advanced-trading">Get Started</button>
				</div>
			</div>
		</div>
		<div class="card-slide owl-right-nav owl-carousel owl-loaded owl-drag">
		<script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/coinMarquee.js"></script><div id="coinmarketcap-widget-marquee" coins="1,1027,825" currency="USD" theme="light" transparent="false" show-symbol-logo="true"></div>

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
		<?php include 'templates/footer.php'; ?>
		<!--**********************************
            Footer end
        ***********************************-->
	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->


    <!--**********************************
        Scripts
    ***********************************-->
	<!-- Required vendors -->
	<script src="public/vendor/global/global.min.js" type="text/javascript"></script>
	<script src="public/vendor/jquery-nice-select/js/jquery.nice-select.min.js" type="text/javascript"></script>
	
	<script src="public/vendor/owl-carousel/owl.carousel.js" type="text/javascript"></script>
	<script src="public/js/dashboard/dashboard-1.js" type="text/javascript"></script>
	<script src="public/js/custom.min.js" type="text/javascript"></script>
	<script src="public/js/deznav-init.js" type="text/javascript"></script>

	
	<script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.8/dist/clipboard.min.js"></script>

	<script src="public/vendor/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
    <!-- <script src="public/js/plugins-init/sweetalert.init.js" type="text/javascript"></script> -->

	<script src="https://dropin-sandbox.vpay.africa/dropin/v1/initialise.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script> -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script>


	<script src="public/js/functions.js" type="text/javascript"></script>
	<script src="public/js/shrine.js" type="text/javascript"></script>

    

</body>

</html>