<?php 

$page_title = "Procesing...| Tradeshrine";
include 'ts_templates/head.php';

 

$Payments = new Payments();
$allTransactions = $Payments->pendingAcademy($userID);




$page_header = 'Academy Subscriptions';

// echo var_dump($_SESSION);
// die();


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
					
						<div class="row">
                            <div class="col-xl-12">
								<div class="card">
									<div class="card-header justify-content-between border-0">
										<div class="d-flex align-items-center">
											<div class="dropdown bootstrap-select">
												
											</div>
										</div>
									</div>
									<div class="card-body pt-0 px-0">
										<div class="table-responsive">
											<table class="table-responsive tb-transaction table shadow-hover mb-4" id="example6">
												<thead>
													<tr>
														<th>S/N</th>
														<th>Payment Method</th>
														<th>Amount Paid</th>
														<th>Date</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>
													<?php 
													$count = 1;
													foreach($allTransactions as $row){
														$timedate = $row['start_date'];
													?>
													<tr>
														<td><?php echo $count; ?></td>
														<td><?php echo strtoupper($row['payment_method']); ?></td>
														<td class="font-w700 fs-16">$<?php echo number_format($row['amount_paid'], 2); ?></td>
														<td class="fs-14 font-w400"><?php echo date("Y-m-d", strtotime($timedate)); ?></td>
														<td>
															<?php
																if($row['academy_status'] == 'pending'){?>
																	<span class="text-warning">Pending</span>

															<?php 

																}else{ ?>
																	<span class="text-success">
																		Completed
																	</span>
																<?php } ?>
														</td>
													</tr>
													<?php $count++; } ?>
												</tbody>
											</table>
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


        <!-- Hidden Inputs -->
        <input type="hidden" name="" id="pending-sign-up" value="<?php echo $timerStats; ?>">
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
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>


	<script src="js/demo.js"></script>
	<script src="js/functions.js"></script>
    <script src="js/shrine.js"></script>

    <script>
        $(document).ready(function () {
		$('#example6').DataTable({
			responsive: true,
			paging: true,
			searching: true,
			ordering: true,
			lengthChange: true
		});



            let expirationTime = parseInt($('#pending-sign-up').val()); // Retrieve expiration time from the hidden input
            let now = Math.floor(Date.now() / 1000); // Get current time in seconds
            let butTotalTime = expirationTime - now; // Calculate remaining time in seconds

            function timer() {
                if (butTotalTime <= 0) {
                    clearInterval(interval); // Stop the countdown when time is up
                    $('#timer').text('Time expired');
                    return;
                }

                let buyMins = Math.floor(butTotalTime / 60);
                let buySecs = butTotalTime % 60;

                $('#timer').text(`${buyMins}:${buySecs}`);
                butTotalTime--;
            }

            // Call initially to update the timer immediately
            let interval = setInterval(timer, 1000); // Update timer every second
            


            function checkBuyRequest() {
                $.ajax({
                    url: '../api/checkBuyRequest.php', // Endpoint to check if the buy request exists
                    method: 'GET',
                    success: function(response) { 
                        console.log(response)
                        if (response == 0) {
                            // Buy request exists, continue running the timer
                            $('#buy-sell-result').hide();
                            $('#buy-sell-done').show();
                        } else {
                            // Buy request not found, stop the timer and display message
                            clearInterval(interval);
                            timer(); 
                            // $('#timer').text('Transaction pending');
                        }
                        // Initiate another AJAX request after a certain interval
                        setTimeout(checkBuyRequest, 2000); // Check every 5 seconds 
                    }
                });
            }

            // Call checkBuyRequest initially
            checkBuyRequest();
            


        });
    </script>
	
</body>


</html>