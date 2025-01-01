<?php 
$page_title = "User Account | Tradeshrine";
include 'ts_templates/head.php';
// print_r(($userDetails));
 
// if($userDetails['verified'] !== 1){
// 	header("Location: ./verify.php");
// 	echo $userDetails['email'];
//     exit();
// }

$page_header = 'Hello, '.$userDetails['first_name'].'! '; 

$Payments = new Payments();
$allTransactions = $Payments->allTransactions($userID);

?>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="loader">
	</div>
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
					<!-- column -->
					<div class="col-xl-12">
						<!-- row -->
						<div class="row">
							<!-- column -->
							<div class="col-xl-4 col-lg-4 col-sm-4">
								<div class="card ">
									<div class="card-body">
										<div class="card-wiget-info rewards">
											<h4 class="count-num">$<?php echo number_format($userDetails['wallet']); ?></h4>
											<p>Wallet Balance</p>
											
											<div class="d-flex align-items-baseline reward-earn">
												<button id="fiat-btn" class="btn btn-primary">Fund Account</button>
											</div>
											
										</div>
									</div>
									
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-sm-4">
								<div class="card exchange">
									<div class="card-header d-block border-0 pb-0">
										<h2 class="heading"> Referral Bonus </h2>
									</div>
									<div class="card-body pt-0">
										<div class="balance">
											
											<div class="d-flex justify-content-between align-items-baseline">
												<h4 class="count-num">$<?php echo number_format($userDetails['referral_wallet']); ?></h4>
												<span class="fs-14 font-w400 text-success"><i class="bi bi-caret-up-fill pe-2"></i>+ 15%</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-sm-4">
								<div class="card exchange">
									<div class="card-header d-block border-0 pb-0">
										<h2 class="heading"> Transactions </h2>
									</div>
									<div class="card-body pt-0">
										<div class="balance">
											
											<div class="d-flex justify-content-between align-items-baseline">
												<h4 class="count-num">$23,741.60</h4>
												<span class="fs-14 font-w400 text-success"><i class="bi bi-caret-up-fill pe-2"></i>+ 15%</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header justify-content-between border-0">
										<h2 class="heading mb-0">Latest Transaction</h2>
										<div class="d-flex align-items-center">
											<div class="dropdown bootstrap-select">
												<select class="image-select default-select dashboard-select width-130" aria-label="Default" tabindex="0">
													<option selected="">This Month</option>
													<option value="1">Weeks</option>
													<option value="2">Today</option>
												</select>
											</div>
										</div>
									</div>
									<div class="card-body pt-0 px-0">
										<div class="table-responsive">
											<table class="table-responsive tb-transaction table shadow-hover mb-4 dataTable no-footer" id="example6">
												<tbody>
													<?php 
													$account = 1;
													 foreach($allTransactions as $row){
														// print_r($row);
														
														$timedate = $row['trans_date'];
														// $formattedDate = date("Y-m-d", $timedate);
														?>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<div class="avatar">
																	<?php echo $account; ?>
																</div>
																<div class="ms-3">
																	<h5 class="mb-0"><a class="text-secondary" href="page-error-404.html"><?php echo $row['destination']; ?></a></h5>
																</div>
															</div>
														</td>
														
														<td class="font-w700 fs-16">$<?php echo $row['amount']; ?></td>
														<td class="fs-14 font-w400"><?php echo $timedate; ?></td>
													
														<td class="text-end ps-0">
															<div class="dropdown">
																<a href="javascript:void(0);" class="btn-link btn sharp tp-btn btn-primary pill" data-bs-toggle="dropdown" aria-expanded="false">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M12.0012 9.35986C11.6543 9.35986 11.3109 9.42818 10.9904 9.56091C10.67 9.69365 10.3788 9.8882 10.1335 10.1335C9.88829 10.3787 9.69374 10.6699 9.56101 10.9903C9.42828 11.3108 9.35996 11.6542 9.35996 12.0011C9.35996 12.3479 9.42828 12.6914 9.56101 13.0118C9.69374 13.3323 9.88829 13.6234 10.1335 13.8687C10.3788 14.1139 10.67 14.3085 10.9904 14.4412C11.3109 14.5739 11.6543 14.6423 12.0012 14.6423C12.7017 14.6421 13.3734 14.3637 13.8686 13.8683C14.3638 13.3728 14.6419 12.701 14.6418 12.0005C14.6416 11.3 14.3632 10.6282 13.8677 10.133C13.3723 9.63782 12.7004 9.3597 12 9.35986H12.0012ZM3.60116 9.35986C3.25431 9.35986 2.91086 9.42818 2.59042 9.56091C2.26997 9.69365 1.97881 9.8882 1.73355 10.1335C1.48829 10.3787 1.29374 10.6699 1.16101 10.9903C1.02828 11.3108 0.959961 11.6542 0.959961 12.0011C0.959961 12.3479 1.02828 12.6914 1.16101 13.0118C1.29374 13.3323 1.48829 13.6234 1.73355 13.8687C1.97881 14.1139 2.26997 14.3085 2.59042 14.4412C2.91086 14.5739 3.25431 14.6423 3.60116 14.6423C4.30165 14.6421 4.97339 14.3637 5.4686 13.8683C5.9638 13.3728 6.24192 12.701 6.24176 12.0005C6.2416 11.3 5.96318 10.6282 5.46775 10.133C4.97231 9.63782 4.30045 9.3597 3.59996 9.35986H3.60116ZM20.4012 9.35986C20.0543 9.35986 19.7109 9.42818 19.3904 9.56091C19.07 9.69365 18.7788 9.8882 18.5336 10.1335C18.2883 10.3787 18.0937 10.6699 17.961 10.9903C17.8283 11.3108 17.76 11.6542 17.76 12.0011C17.76 12.3479 17.8283 12.6914 17.961 13.0118C18.0937 13.3323 18.2883 13.6234 18.5336 13.8687C18.7788 14.1139 19.07 14.3085 19.3904 14.4412C19.7109 14.5739 20.0543 14.6423 20.4012 14.6423C21.1017 14.6421 21.7734 14.3637 22.2686 13.8683C22.7638 13.3728 23.0419 12.701 23.0418 12.0005C23.0416 11.3 22.7632 10.6282 22.2677 10.133C21.7723 9.63782 21.1005 9.3597 20.4 9.35986H20.4012Z" fill="#A098AE"/>
																</svg>
																</a>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item" href="javascript:void(0);">View</a>
																	<a class="dropdown-item" href="javascript:void(0);">Share</a>
																</div>
															</div>
														</td>
													</tr>
													<?php $account++;} ?>
												</tbody>
											</table>
										</div>
										<div class="table-pagenation d-flex align-items-center justify-content-between">
											<p>Showing <span> 1-5 </span> of <span> 100 </span>  </p>
											<nav>
												<ul class="pagination pagination-gutter pagination-primary no-bg">
													<li class="page-item page-indicator">
														<a class="page-link" href="javascript:void(0)">
															<i class="fa-solid fa-angle-left"></i></a>
													</li>
													<li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
													</li>
													<li class="page-item "><a class="page-link" href="javascript:void(0)">2</a></li>
													<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
													<li class="page-item page-indicator">
														<a class="page-link" href="javascript:void(0)">
															<i class="fa-solid fa-angle-right"></i></a>
													</li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4">
						<!-- row -->
						
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
        <div class="footer out-footer">
            <div class="copyright">
               <p>Copyright © Tradeshrine</p>
            </div>
        </div>
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

	<div class="modal fade" id="fund-fiat-modal">
		<div class="modal-dialog modal-dialog-centered" role="document">

			<div class="modal-content" id="form-holder">
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
							<!-- <button type="button" class="btn btn-dark" id="complete-chipper">Upload Screehsot</button>  -->
						</div>
					</div>
					<div id="" class="text-center">
						<p id="fiat-fund-error" class="text-danger"></p>
					</div>
            	</div>
			
				<div class="modal-footer">
					<button type="button" class="btn btn-danger light" id="fiat-fund-back">Back</button>
					<button type="button" class="btn btn-dark" id="complete-chipper" style="display:none">Upload Screehsot</button> 
					<button type="button" class="btn btn-primary" id="fiat-proceed">Proceed</button>
				</div>
			</div>
			<div class="modal-content" id="fund-success-modal" style="display:none">
				<div class="modal-header">
					<h5 class="modal-title">Successful</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal">
					</button>
				</div>
				<div class="modal-body">
					
					<p>
						<small>Your transaction was successful and is currently being processed. </small> <br>
						<br>
						Cheers.
							</p>
							
            	</div>
			
				
			</div>
		</div>
	</div>

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
	<script src="js/functions.js"></script>
	<script src="js/shrine.js"></script>
    <!-- <script src="js/styleSwitcher.js"></script> -->
	<script src="https://dropin-sandbox.vpay.africa/dropin/v1/initialise.js"></script>

</body>


</html>