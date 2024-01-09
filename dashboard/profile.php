<?php 
$page_title = "My Account | Tradeshrine";
include 'templates/head.php';
 
if($userDetails['verified'] == 0){
	header("Location: ./verify.php");
    exit();
}


$Payment = new Payments();
$histroy = $Payment->allTransactions($userID);


$dateTime = $userDetails['date_registered'];
$dateTime = new DateTime($dateTime);
// Format the datetime
$formattedDatetime = $dateTime->format(' M j, Y');
$bankDetails = $User->getBankDetails($userID);

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
		<h4 class="font-w600 mb-2 me-auto">Profile</h4>
		
		
	</div>	
	
	
	
		
		
		
		
		
    <div class="row page-titles">
           <ol class="breadcrumb">
               <li class=" active"> <a href="javascript:void(0)">Referral & Earn: </a> </li> 
               <span id="ref-cp-alert" class="small text-success"></span>
               <li id="referral-link" data-id="https://tradeshrine.com/signup?ref=<?php echo $userDetails['referl_code'];?>"> https://tradeshrine.com/signup?ref=<?php echo $userDetails['referl_code'];?> <i class="fa fa-copy" id="ref-link-cp"></i></li>
               <li class="breadcrumb-item"></li>
           </ol>
       </div>
	<div class="row">
        <div class="col-xl-5 col-xxl-4">
			<div class="card">
				
				<div class="card-body">
					<div class="text-center">
						<div class="my-profile"> 
							<img src="public/images/profile/<?php echo $userDetails['profile_image']; ?>" alt="" class="rounded-circle">
							<a href="javascript:void(0);"><i class="fa fa-pencil" aria-hidden="true"></i></a>
						</div>
						<h4 class="mt-3 font-w600 text-black mb-0 name-text"><?php echo $userDetails['first_name'].' '.$userDetails['last_name']; ?></h4>
						<span><?php echo $userDetails['email']; ?></span>
						<p class="mb-0 mt-3 text-primary fs-16">Joined <?php echo $formattedDatetime; ?></p>
					</div>
					
				</div>
			</div>
		</div>

        <div class="col-xl-4 col-xxl-4">
            
            <div class="card">
                <div class="card-body">
                    <div class="profile-statistics">
                        <h4 class="mb-0 text-black fs-20">Stats</h4> <br>
                        <div class="text-center">

                            <div class="row">
                                <div class="col">
                                    <h4 class="m-b-0">$<?php echo number_format($userDetails['wallet']); ?></h4><span>Wallet</span>
                                </div>
                                <div class="col">
                                    <h4 class="m-b-0">$<?php echo number_format($userDetails['referral_wallet']); ?></h4><span>Bonus</span>
                                </div>
                                <div class="col">
                                    <h3 class="m-b-0">45</h3><span>Referrals</span>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="javascript:void(0);" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#sendMessageModal">Make Withdrawal</a>
                            </div>
                        </div>
                        <!-- Modal -->
                        
                    </div>
                </div>
                	
            </div>
            
        </div>
        <div class="col-xl-4">
            <div class="card-bx stacked card">
                <img src="public/images/card/card11.jpg" alt="">
                <div class="card-info">
                    <p class="mb-1 text-white fs-14">Bank Details</p>
                    <div class="d-flex justify-content-between">
                        <h2 class="num-text text-white mb-5 font-w600"><?php echo $bankDetails['account_number']; ?></h2>
                        <span id="bank-edit" class="text-white"><i class="fa fa-edit"></i></span>
                    </div>
                    <div class="d-flex">
                        <div class="me-4 text-white">
                            <p class="fs-12 mb-1 op6">Bank Name</p>
                            <span><?php echo $bankDetails['bank_name']; ?></span>
                        </div>
                        <div class="text-white">
                            <p class="fs-12 mb-1 op6">Account Name</p>
                            <span><?php echo $bankDetails['account_name']; ?></span>
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
    
    <script src="public/js/bootstrap-notify.js"></script>



	<script src="public/js/functions.js" type="text/javascript"></script>
	<!-- <script src="public/js/shrine.js" type="text/javascript"></script> -->
	<script src="public/js/profile.js" type="text/javascript"></script>

    

</body>

</html>