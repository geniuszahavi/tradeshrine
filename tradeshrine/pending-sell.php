<?php 
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
$page_title = "User Account | Tradeshrine";
include 'ts_templates/head.php';
// print_r(($userDetails));

$userID =  $_SESSION['user_id'];
 
$Server = new Dbh();
 

// $timerStats = $_SESSION['expirationTime'];


$page_header = 'Pending Crypto Deposits';

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
		
       <?php echo "Hello World"; ?>
		
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
							<div class="col-xl-12 col-sm-6">
								<div class="card h-auto">
									<div class="card-body px-0 pt-1">
									

										<!-- Result area -->
										<div class="" id="buy-sell-result" >
											
											<div class="tab-content" id="nav-tabContent">
												<div class="tab-pane fade show active" id="nav-buy" role="tabpanel" aria-labelledby="nav-buy-tab">
													
													<div class="tab-content" id="nav-tabContent1">
														<div class="tab-pane fade show active" id="nav-market-order1" role="tabpanel" aria-labelledby="nav-market-order-tab1">
														</div>
														<div class="tab-pane fade" id="nav-limit-order1" role="tabpanel" aria-labelledby="nav-limit-order-tab1">
														</div>
													</div>

													<div class="sell-element ">
														
                                                    <div class="table-responsive">
                                                            <table class="table table-responsive-md">
                                                                <thead>
                                                                    <tr>
                                                                        <th style="width:80px;"><strong>#</strong></th>
                                                                        <th><strong>Amount</strong></th>
                                                                        <th><strong>Value / Method</strong></th>
                                                                        <th><strong>DATE</strong></th>
                                                                        <th><strong>STATUS</strong></th>
                                                                        <th><strong>Action</strong></th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    $query = "SELECT * FROM deposit_requests WHERE user_id = ?";
                                                                    $stmt = $Server->connect()->prepare($query);
                                                                    $stmt->execute([$userID]);
                                                                    $count = 1;

                                                                    while ($row = $stmt->fetch()) {
                                                                        try {
                                                                            $dateTimeString = $row['req_date'];
                                                                            $dateTime = new DateTime($dateTimeString);
                                                                            $formattedDateTime = $dateTime->format('F j, Y \a\t g:ia');
                                                                        } catch (Exception $e) {
                                                                            $formattedDateTime = "Invalid date";
                                                                        }
                                                                        ?>
                                                                        <tr>
                                                                            <td><strong><?php echo $count; ?></strong></td>
                                                                            <td><?php echo number_format(htmlspecialchars($row['amount'])); ?></td>
                                                                            <td><?php echo number_format(htmlspecialchars($row['coin_value']), 5) . ' ' . htmlspecialchars($row['coin_type']); ?></td>
                                                                            <td><?php echo $formattedDateTime; ?></td>
                                                                            <td><span class="badge light badge-warning">Pending</span></td>
                                                                            <td>
                                                                                <div class="dropdown">
                                                                                    <button type="button" class="btn btn-warning light sharp" data-bs-toggle="dropdown">
                                                                                        <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                <rect x="0" y="0" width="24" height="24" />
                                                                                                <circle fill="#000000" cx="5" cy="12" r="2" />
                                                                                                <circle fill="#000000" cx="12" cy="12" r="2" />
                                                                                                <circle fill="#000000" cx="19" cy="12" r="2" />
                                                                                            </g>
                                                                                        </svg>
                                                                                    </button>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="#">Contact Support</a>
                                                                                    </div>
                                                                                </div>
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
        <input type="hidden" name="" id="expirationTime" value="<?php echo $timerStats; ?>">
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

    <script>
        $(document).ready(function () {
            


            let expirationTime = parseInt($('#expirationTime').val()); // Retrieve expiration time from the hidden input
            let now = Math.floor(Date.now() / 1000); // Get current time in seconds
            let butTotalTime = expirationTime - now; // Calculate remaining time in seconds

            function timer() {
                if (butTotalTime <= 0) {
                    clearInterval(interval); // Stop the countdown when time is up
                    $('#timer').text('Processing');
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
                    url: '../api/checkSellRequest.php', // Endpoint to check if the buy request exists
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