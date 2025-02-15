<?php 
$page_title = "User Account | Tradeshrine";
include 'ts_templates/head.php';

$userDetails = $User->getUserById($userID);

// print_r(($userDetails));
 
// if($userDetails['verified'] !== 1){
// 	header("Location: ./verify.php");
// 	echo $userDetails['email'];
//     exit();
// }

$page_header = 'Hello, '.$userDetails['first_name']; 



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
                <div class="col-xl-12 col-lg-6 col-sm-12">
                    <div class="card ">
                            <div class="card-body">
                                <div class="card-wiget-info rewards">
                                    <h6 class="count-num">Hi, <?php echo $userDetails['first_name']  ?> 👋</h6>
                                    <p> Some deep meesage about crypto currency and digital knowledge.</p>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis voluptate in odio perferendis praesentium dolores itaque cum debitis nam, totam sit amet quis quam, voluptatibus et, saepe labore! Ducimus, ipsum.</p>
                                    
                                    <div class="d-flex align-items-baseline reward-earn">
                                        <button id="fiat-btn" class="btn btn-primary">Get VIP Signals</button>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>	
                </div>
				<div class="row">

                    <?php


                        $userDetails = $User->getUserById($userID);

                        $academyDetails = $User->getAcademyDetails($userID); 
                        // Assuming function name is getAcademyDetails
                            // var_dump($academyDetails); 

                            // Check if academy details exist and have an expiry date
                            // $expiryDate = strtotime($academyDetails['exp_date']); 
                            // Convert expiry date to timestamp

                            // Check if current time is past the expiry date
                            if ($academyDetails !== false && $academyDetails["academy_status"] !== 'pending') { ?>
                                <div class="col-xl-6  col-lg-6">
                    
                                    <div class="card">
                                        <div class="card-header border-0 pb-0">
                                            <h4 class="card-title">Your Academy Subscription Is Active</h4>
                                        </div>
                                        <div class="card-body p-0">
                                            <div id="DZ_W_TimeLine" class="widget-timeline dz-scroll height70 my-4 px-4">
                                            <p>🎉 Your academy subscription is active! You have full access to all the resources and materials for your enrolled courses. Keep learning and enjoy the journey!</p>
                                            
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                            <?php     
                            }else{
                         
                    ?>
                    <div class="col-xl-4  col-lg-6">
                    
                        <div class="card">
                            <div class="card-header border-0 pb-0">
                                <h4 class="card-title">INTRODUCTION</h4>
                            </div>
                            <div class="card-body p-0">
                                <div id="DZ_W_TimeLine" class="widget-timeline dz-scroll height370 my-4 px-4">
                                    <ul class="timeline">
                                        <!-- <li>
                                            <div class="timeline-badge primary"></div>
                                            <a class="timeline-panel " href="#">
                                                <span>Course Duration: 1 Month</span>
                                                <p class="mb-0">FEE: $50</p>
                                            </a>
                                        </li> -->
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
                            <button class="btn btn-success subscribe-btn" data-id="1" >ENRROL NOW</button>
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
                                        <!-- <li>
                                            <div class="timeline-badge primary"></div>
                                            <a class="timeline-panel" href="#">
                                                <span>Course Duration: 1-6 Months</span>
                                                <p>FEE: $100</p>
                                            </a>
                                        </li> -->
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
                            <button class="btn btn-success subscribe-btn" data-id="2" >ENRROL NOW</button>
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
                                        <!-- <li>
                                            <div class="timeline-badge primary"></div>
                                            <a class="timeline-panel" href="#">
                                                <span>Duration: | LIFETIME  MENTORSHIP</span>
                                                <p>FLIGHT TICKET | VIP SIGNALS </p>
                                            </a>
                                        </li> -->
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
                            <button class="btn btn-success subscribe-btn" data-id="3" >ENROLL NOW</button>
                        </div>
					</div>

                    <?php } ?>
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
           Support ticket button end| Earth, Sun, Water, Air
        ***********************************-->


	</div>

    <!-- modal -->
    <div class="modal fade " id="pay-method-modal">
        <div class="modal-dialog modal-dialog-centered"  role="document">
            <div class="modal-content">
                <div class="modal-header" id="modal-hedarr">
                    <h5 class="modal-title" id="modal-title">Purchase A Course</h5>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    
                    <h6 id="timer-display" style="display: none;">00:00</h6>
                </div>

                <div class="modal-body" id="pay-body"  >
                    <form id="payment-form">
                        <div class="container">
                            <div class="row">
                                
                                <div class="col-md-12" id="make-payment-area">
                                    <p>Select the course duration and payment method that suits you.</p>

                                    <!-- Course Plan Selection -->
                                    <div class="mb-3 form-group">
                                        <label for="course-plan" class="form-label">Select Course Plan</label>
                                        <select class="form-control" id="course-plan" name="course_plan" required>
                                            <option value="">Select Course Plan</option>
                                            <option value="online-1">Online (1 Month) - $75 (₦112,875)</option>
                                            <option value="online-3">Online (3 Months) - $197 (₦296,485)</option>
                                            <option value="online-6">Online (6 Months) - $399 (₦510,195)</option>
                                            <option value="online-12">Online (1 Year) - $599 (₦901,495)</option>
                                            <option value="physical">Physical - ₦300,000/Month</option>
                                            <option value="one-on-one">One-on-One With De Crypto Oracle - $2,000</option>
                                        </select>
                                    </div>

                                    <!-- Payment Method Selection -->
                                    <div class="mb-3 form-group">
                                        <label for="aca-pay-method" class="form-label">Select Payment Method</label>
                                        <select class="form-control" id="aca-pay-method" name="payment_method" required>
                                            <!-- <option value="wallet" data-id="wallet">Tradeshrine Wallet</option> -->
                                            <option value="bank-transfer">Bank Transfer</option>
                                            <!-- <option value="vpay">VPay (Card, Bank Transfer, etc.)</option> -->
                                            <option value="chipper">Pay With Chipper</option>
                                            <option value="crypto">Pay With Crypto</option>
                                        </select>
                                    </div>
                                    

                                    <!-- Error Message Display -->
                                    <div class="mb-3">
                                        <small class="text-danger" id="pay-method-error"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer" id="modal-footer-course">
                    
                            <button type="submit" form="payment-form" id="pay-method-btn" class="btn btn-primary btn-left">Proceed</button>
                            <button type="button" class="btn btn-primary disabled" style="display:none"><i class="fa fa-spin fa-spinner"></i></button>
                            
                        </div>
                    </form>
                </div>
                <div class="modal-body" id="bank-transfer-area" style="display:none">
                    <div class="container">
                        <div class="row" id="detais-div">
                            <div class="col-md-12" id="make-payment-area">
                                <p>Kindly transfer the payment of <span class="h6"> &#8358;<span id="dynamic-price"></span>  </span>to the following bank details and upload the payment proof. This typical takes 2 - 5 minutes.</p>

                                <!-- Bank Details -->
                                <div class="mb-3 form-group">
                                    <p><strong>Bank Name:</strong> First Bank of Nigeria</p>
                                    <p><strong>Account Name:</strong> De Crypto Oracle Academy</p>
                                    <p>
                                        <strong>Account Number:</strong> 
                                        <span id="account-number">1234567890</span> 
                                        <i class="fa fa-copy" id="copy-account-number"></i>
                                        <small class="text-success" id="copy-success"></small>
                                    </p>
                                </div>                             

                                <!-- Error Message Display -->
                                <div class="mb-3">
                                    <small class="text-danger" id="pay-method-error"></small>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="modal-footer" id="transfer-footer">
                        <button id="back-to-method-transfer" class="btn btn-warning">Back</button>
                        <button type="button" id="transfer-proceed" class="btn btn-primary btn-left">Upload Proof</button>
                        <input type="file" style="display:none;" id="bank-transfer-screenshot">
                    </div>
                </div>

                <div class="modal-body" id="chipper-area" style="display:none">
                    <div class="container">
                        <div class="row" id="chipper-detais-div">
                            <div class="col-md-12" id="make-payment-area">
                                <p>
                                    <small>Head to your Chipper cash wallet, copy the tag below and proceed to send <b><span class="h6"> &#8358;<span id="dynamic-price-chipper"></span></b>. After payment, upload a screenshot of the proof of payment. </small> <br>
                                </p>
                                <h4>Visa Direct Tag: tradeshrine</h4>
                                <!-- <h4> 4173 9600 5448 2037</h4> -->
                                <input type="file" name="" id="chipper-proof" style="display: none;">                            

                               
                            </div>
                            
                        </div>
                    </div>

                    <div class="modal-footer" id="chipper-footer">
                        <button id="back-to-method-chipper" class="btn btn-warning">Back</button>
                        <button type="button" id="complete-chipper" class="btn btn-primary btn-left">Upload Proof</button>
                        <!-- <input type="file" style="display:none;" id="tran sfer-screenshot"> -->
                    </div>

                </div>

                <div class="modal-body" id="success-modal" style="display: none;">
                    <div class="container">
                        <div class="row" id="success-div">
                                <h1 class="text-center text-warning"><i class=" fa fa-spin fa-spinner"></i></h1>
                                <h4 class="text-warning text-center">Payment Processing </h4>
                                    
                                </div>
                                <p>Your payment has been received. Your academy subscription will be active shortly. You can check progress by clicking the link below.</p>
                                <a href="pending-academy.php" class="btn btn-primary">Track Status</a>
                        </div>
                    </div>

                </div>


                
            </div>
        </div>
    </div>

    <div class="modal-body" id="transfer-success" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="">

                    <div class="mb-3 form-group">
                        <h4>Successful <i class=" fa fa-thummbs-up"></i></h4>
                        
                    </div>
                    <p>Your payment has been received. Check your email for further instructions.</p>

                    

                    

                    <div class="mb-3">
                        <small class="text-danger" id="pay-method-error"></small>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button id="back-to-method" class="btn btn-warning">Back</button>
            <button type="button" id="transfer-proceed" class="btn btn-primary btn-left">Upload Proof <i class="fa fa-upload"></i></button>
            <input type="file" style="display:none;" id="transfer-screenshot">
        </div>
    </div> 

    <!-- Transfer Modal -->
    <!-- <div class="modal-body" id="bank-transfer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="make-payment-area">
                    <p>Please transfer the payment to the following bank details and upload the payment proof.</p>

                    <div class="mb-3 form-group">
                        <label for="bank-details" class="form-label"><strong>Bank Details</strong></label>
                        <p><strong>Bank Name:</strong> First Bank of Nigeria</p>
                        <p><strong>Account Name:</strong> De Crypto Oracle Academy</p>
                        <p>
                            <strong>Account Number:</strong> 
                            <span id="account-number">1234567890</span> 
                            <button class="btn btn-sm btn-secondary" id="copy-account-number">Copy</button>
                        </p>
                    </div>

                    

                    <div class="mb-3">
                        <small class="text-danger" id="pay-method-error"></small>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button id="back-to-method" class="btn btn-warning">Back</button>
            <button type="button" id="transfer-proceed" class="btn btn-primary btn-left">Upload Proof <i class="fa fa-upload"></i></button>
            <input type="file" style="display:none;" id="transfer-screenshot">
        </div>
    </div> -->





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