<?php 
$page_title = "Signals | Tradeshrine";
include 'ts_templates/head.php';
// print_r(($userDetails));
 
if($userDetails['verified'] !== 1){
	header("Location: ./verify.php");
	echo $userDetails['email'];
    exit();
}

$Payment = new Payments();
$histroy = $Payment->allTransactions($userID);


$page_header = 'Signals'; 


?>
<body>

    <!--*******************
        Preloader start
    ********************-->
   
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
			<div class="container-fluid">
				<!-- row -->
				<div class="row">
					<div class="col-xl-12">
						 <!-- Row -->
						<div class="row">
							<!-- column -->
							<div class="col-xl-6 col-md-6 col-sm-6">
								<div class="card pull-up">
									<div class="card-body align-items-center flex-wrap">
										<div class="d-flex align-items-center mb-4">
											<a href="javascript:void(0)" class="ico-icon">
												<!-- <i class="fa-solid fa-bitcoin-sign"></i> -->
											</a>
											<div class="ms-4">
												<a href="javascript:void(0)"><h4 class="heading mb-0">$KAVA/USDT </h4></a>
												<span>Leverage: (3-5-20x)</span>  <br>
												<span>Direction: LONG</span>
											</div>
										</div>	<br>
										<div class="d-flex align-items-center justify-content-between">
											<div>
                                                <span class="fs-12">ENTRY</span>
												<p class="mb-0 fs-14 text-black">0.794 - 0.8556</P>
											</div>
											<div>
                                                <span class="fs-12">OTE</span>
												<p class="mb-0 fs-14 text-success">0.83</P>
											</div>
										</div>
                                        <div class="d-flex align-items-center justify-content-between">
											<div>
                                                <span class="fs-12">Scalping</span>
												<p class="mb-0 fs-14 text-black">0.8645 - 0.875 - 0.89 - 0.91 - 0.95</P>
											</div>
											<div>
                                                <span class="fs-12">Day trading</span>
												<p class="mb-0 fs-14 text-success">1.1 - 1.3 - 1.6 - 1.9 - 2.37</P>
											</div>
										</div>
                                        <div><br><br>
                                            <h6>Stop Loss: 0.7484</h6>
                                        </div>
									</div>	
								</div>
							</div>
							<!-- /column -->
                            <div class="col-xl-6 col-md-6 col-sm-6">
								<div class="card pull-up">
									<div class="card-body align-items-center flex-wrap">
										<div class="d-flex align-items-center mb-4">
											<a href="javascript:void(0)" class="ico-icon">
												<!-- <i class="fa-solid fa-bitcoin-sign"></i> -->
											</a>
											<div class="ms-4">
												<a href="javascript:void(0)"><h4 class="heading mb-0">$KAVA/USDT </h4></a>
												<span>Leverage: (3-5-20x)</span>  <br>
												<span>Direction: LONG</span>
											</div>
										</div>	<br>
										<div class="d-flex align-items-center justify-content-between">
											<div>
                                                <span class="fs-12">ENTRY</span>
												<p class="mb-0 fs-14 text-black">0.794 - 0.8556</P>
											</div>
											<div>
                                                <span class="fs-12">OTE</span>
												<p class="mb-0 fs-14 text-success">0.83</P>
											</div>
										</div>
                                        <div class="d-flex align-items-center justify-content-between">
											<div>
                                                <span class="fs-12">Scalping</span>
												<p class="mb-0 fs-14 text-black">0.8645 - 0.875 - 0.89 - 0.91 - 0.95</P>
											</div>
											<div>
                                                <span class="fs-12">Day trading</span>
												<p class="mb-0 fs-14 text-success">1.1 - 1.3 - 1.6 - 1.9 - 2.37</P>
											</div>
										</div>
                                        <div><br><br>
                                            <h6>Stop Loss: 0.7484</h6>
                                        </div>
									</div>	
								</div>
							</div>
                            <div class="col-xl-6 col-md-6 col-sm-6">
								<div class="card pull-up">
									<div class="card-body align-items-center flex-wrap">
										<div class="d-flex align-items-center mb-4">
											<a href="javascript:void(0)" class="ico-icon">
												<!-- <i class="fa-solid fa-bitcoin-sign"></i> -->
											</a>
											<div class="ms-4">
												<a href="javascript:void(0)"><h4 class="heading mb-0">$KAVA/USDT </h4></a>
												<span>Leverage: (3-5-20x)</span>  <br>
												<span>Direction: LONG</span>
											</div>
										</div>	<br>
										<div class="d-flex align-items-center justify-content-between">
											<div>
                                                <span class="fs-12">ENTRY</span>
												<p class="mb-0 fs-14 text-black">0.794 - 0.8556</P>
											</div>
											<div>
                                                <span class="fs-12">OTE</span>
												<p class="mb-0 fs-14 text-success">0.83</P>
											</div>
										</div>
                                        <div class="d-flex align-items-center justify-content-between">
											<div>
                                                <span class="fs-12">Scalping</span>
												<p class="mb-0 fs-14 text-black">0.8645 - 0.875 - 0.89 - 0.91 - 0.95</P>
											</div>
											<div>
                                                <span class="fs-12">Day trading</span>
												<p class="mb-0 fs-14 text-success">1.1 - 1.3 - 1.6 - 1.9 - 2.37</P>
											</div>
										</div>
                                        <div><br><br>
                                            <h6>Stop Loss: 0.7484</h6>
                                        </div>
									</div>	
								</div>
							</div>
                            <div class="col-xl-6 col-md-6 col-sm-6">
								<div class="card pull-up">
									<div class="card-body align-items-center flex-wrap">
										<div class="d-flex align-items-center mb-4">
											<a href="javascript:void(0)" class="ico-icon">
												<!-- <i class="fa-solid fa-bitcoin-sign"></i> -->
											</a>
											<div class="ms-4">
												<a href="javascript:void(0)"><h4 class="heading mb-0">$KAVA/USDT </h4></a>
												<span>Leverage: (3-5-20x)</span>  <br>
												<span>Direction: LONG</span>
											</div>
										</div>	<br>
										<div class="d-flex align-items-center justify-content-between">
											<div>
                                                <span class="fs-12">ENTRY</span>
												<p class="mb-0 fs-14 text-black">0.794 - 0.8556</P>
											</div>
											<div>
                                                <span class="fs-12">OTE</span>
												<p class="mb-0 fs-14 text-success">0.83</P>
											</div>
										</div>
                                        <div class="d-flex align-items-center justify-content-between">
											<div>
                                                <span class="fs-12">Scalping</span>
												<p class="mb-0 fs-14 text-black">0.8645 - 0.875 - 0.89 - 0.91 - 0.95</P>
											</div>
											<div>
                                                <span class="fs-12">Day trading</span>
												<p class="mb-0 fs-14 text-success">1.1 - 1.3 - 1.6 - 1.9 - 2.37</P>
											</div>
										</div>
                                        <div><br><br>
                                            <h6>Stop Loss: 0.7484</h6>
                                        </div>
									</div>	
								</div>
							</div>
                            <div class="col-xl-6 col-md-6 col-sm-6">
								<div class="card pull-up">
									<div class="card-body align-items-center flex-wrap">
										<div class="d-flex align-items-center mb-4">
											<a href="javascript:void(0)" class="ico-icon">
												<!-- <i class="fa-solid fa-bitcoin-sign"></i> -->
											</a>
											<div class="ms-4">
												<a href="javascript:void(0)"><h4 class="heading mb-0">$KAVA/USDT </h4></a>
												<span>Leverage: (3-5-20x)</span>  <br>
												<span>Direction: LONG</span>
											</div>
										</div>	<br>
										<div class="d-flex align-items-center justify-content-between">
											<div>
                                                <span class="fs-12">ENTRY</span>
												<p class="mb-0 fs-14 text-black">0.794 - 0.8556</P>
											</div>
											<div>
                                                <span class="fs-12">OTE</span>
												<p class="mb-0 fs-14 text-success">0.83</P>
											</div>
										</div>
                                        <div class="d-flex align-items-center justify-content-between">
											<div>
                                                <span class="fs-12">Scalping</span>
												<p class="mb-0 fs-14 text-black">0.8645 - 0.875 - 0.89 - 0.91 - 0.95</P>
											</div>
											<div>
                                                <span class="fs-12">Day trading</span>
												<p class="mb-0 fs-14 text-success">1.1 - 1.3 - 1.6 - 1.9 - 2.37</P>
											</div>
										</div>
                                        <div><br><br>
                                            <h6>Stop Loss: 0.7484</h6>
                                        </div>
									</div>	
								</div>
							</div>

							<!-- column -->
						
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
	<!-- Chart piety plugin files -->
    <script src="vendor/peity/jquery.peity.min.js"></script>
	<script src="js/user.js"></script>
    <script src="js/custom.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>

</html>