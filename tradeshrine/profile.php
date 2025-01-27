<?php 
$page_title = "My Account | Tradeshrine";
include 'ts_templates/head.php';
// print_r(($userDetails));
 
// if($userDetails['verified'] !== 1){
// 	header("Location: ./verify.php");
// 	echo $userDetails['email'];
//     exit();
// }

$page_header = 'Welcome, '.$userDetails['first_name'].'! '; 


$Payments = new Payments();
$allTransactions = $Payments->allTransactions($userID);


$referralCode = $userDetails['referl_code'];
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
            Chat box start
        ***********************************-->
		
		<!--**********************************
            Chat box End
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
				
				
				<div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Referral Link</a></li>
						<li class="breadcrumb-item"><i class="fa fa-copy" id="copy-button"></i></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile card card-body px-3 pt-3 pb-0">
                            <div class="profile-head">
                                <div class="photo-content">
                                    <div class="cover-photo rounded"></div>
                                </div>
                                <div class="profile-info">
									<div class="profile-photo">
										<img src="images/profile/profile.png" class="img-fluid rounded-circle" alt="">
									</div>
									<div class="profile-details">
										<div class="profile-name px-3 pt-2">
											<h4 class="text-primary mb-0"><?php echo $fullName; ?></h4>
											<p><?php echo $email; ?></p>
										</div>
										<!-- <div class="profile-email px-2 pt-2">
											<h4 class="text-muted mb-0">info@example.com</h4>
											<p>Email</p>
										</div> -->
										<div class="dropdown ms-auto">
											<a href="#" class="btn btn-primary light sharp" data-bs-toggle="dropdown" aria-expanded="true">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g>
												</svg>
											</a>
											<ul class="dropdown-menu dropdown-menu-end">
												
												<li class="dropdown-item" id="add-account-btn">
													<i class="fa fa-camera text-primary me-2">
													</i> Update Profile Picture
												</li>
												<!-- <li class="dropdown-item">
													<i class="fa fa-edit text-primary me-2">
													</i> Edit Profile
												</li> -->
												
												
											</ul>
										</div>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4">
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-body">
										<div class="profile-statistics">
											<div class="text-center">
												<div class="row">
													<div class="col">
														<h3 class="m-b-0">150</h3><span>Referrals</span>
													</div>
													<div class="col">
														<h3 class="m-b-0">$<?php echo $referralBonus;?></h3><span> Bonus</span>
													</div>
													<div class="col">
														<h3 class="m-b-0">$<?php echo $wallet;?></h3><span>Wallet</span>
													</div>
												</div>
												<div class="mt-4">
													<button  class="btn btn-primary mb-1 me-1">Withdraw</button> 
													
												</div>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							
						</div>
                    </div>
                    <div class="col-xl-8">
                        <div class="card h-auto">
                            <div class="card-body" style="display: none;" id="add-account-details">
                                <div class="profile-tab">
                                    <div class="custom-tab-1" >
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item"><a href="#profile-settings" data-bs-toggle="tab" class="nav-link">Set Withdrawal Details</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            
                                            <div id="profile-settings" class="tab-pane fade active show">
                                                <div class="pt-3">
                                                    <div class="settings-form">
                                                        <form id="add-account-details">
                                                            <div class="row">
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="form-label">Select Bank</label>
																	<select name="" id="locality-dropdown" style="width: 130px;">
																		<option value="">Select Bank</option>
																	</select>

                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="form-label">
																		Account Number
																	</label>
                                                                    <input type="number" placeholder="Account number" class="form-control" id="acc_gigits">
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="mb-3">
                                                                <label class="form-label" id="acc_name">
																	
																</label>
                                                                
                                                            </div>
                                                           
                                                            <button class="btn btn-primary" type="submit">
																Add Account
															</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<!-- Modal -->
									<div class="modal fade" id="replyModal">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Post Reply</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
												</div>
												<div class="modal-body">
													<form>
														<textarea class="form-control h-50" rows="4">Message</textarea>
													</form>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Reply</button>
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
	
	<!--removeIf(production)-->

	<input type="hidden" id="ref-link" value="<?php echo $referralCode; ?>">
        
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
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
	<script src="js/profile.js"></script>
	
	
</body>

</html>