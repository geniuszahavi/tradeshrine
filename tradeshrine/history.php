<?php 
$page_title = "Transactions | Tradeshrine";
include 'ts_templates/head.php';
// print_r(($userDetails));
 
if($userDetails['verified'] !== 1){
	header("Location: ./verify.php");
	echo $userDetails['email'];
    exit();
}

$Payment = new Payments();
$histroy = $Payment->allTransactions($userID);


$page_header = 'History'; 


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
					<!-- column -->
					<div class="col-xxl-12">
						<div class="card">
							<div class="card-header border-0 pb-2 flex-wrap">
								<!-- <div class="d-flex"> -->
									<h4 class="heading me-2">Trade History</h4>
									
								<!-- </div> -->
							</div>
							<div class="card-body pt-2">
								<div class="tab-content" id="nav-tabContent">
									<div class="tab-pane fade show active" id="nav-order" role="tabpanel" aria-labelledby="nav-order-tab">
										<div class="table-responsive dataTablehistory">
											<table id="example" class="table shadow-hover display" style="min-width:845px">
												<thead>
													<tr>
                                                        <th></th>
                                                        <th>Amount</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                        <th>Txn ID</th>
													</tr>
												</thead>
												<tbody>

                                                    <?php 

                                                        foreach ($histroy as $key) { 
                                                            $dateTime = $key['trans_date'];
                                                            $dateTime = new DateTime($dateTime);
                                                            // Format the datetime
                                                            $formattedDatetime = $dateTime->format(' F j, Y g:i A');
                                                            
                                                        ?>
                                                            
                                                    
                                                        <tr>
                                                            <?php 
                                                            if($key['t_type'] !== 'credit'){ ?>
                                                            
                                                                <td class="pe-0">
                                                                    <span>
                                                                        <svg width="14" height="23" viewBox="0 0 64 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <rect x="0.0527344" width="63.1713" height="63" rx="31.5" fill="#F04444"/>
                                                                            <path d="M22.2454 30.9043L22.2454 30.9043L22.2287 23.9961C22.2286 23.9924 22.2286 23.989 22.2287 23.9858L22.2454 30.9043ZM22.2454 30.9043C22.2473 31.6978 22.8938 32.3396 23.6896 32.3377C24.4853 32.3358 25.1288 31.691 25.1269 30.8975L25.1269 30.8975L25.1186 27.4671L38.3382 40.6509C38.9008 41.212 39.813 41.212 40.3757 40.6509C40.9383 40.0897 40.9383 39.18 40.3757 38.6189L27.1561 25.4351M22.2454 30.9043L27.1561 25.4351M27.1561 25.4351L30.5957 25.4434L30.5957 25.4434C31.3914 25.4453 32.038 24.8036 32.0399 24.01L27.1561 25.4351ZM30.6014 23.069L30.6026 22.5697C31.3981 22.5717 32.0418 23.2163 32.0399 24.01L30.6014 23.069ZM30.6014 23.069L30.6026 22.5697L23.6898 22.5531L23.6728 22.553L23.6724 22.553M30.6014 23.069L23.6724 22.553M23.6724 22.553C23.67 22.553 23.6677 22.553 23.6655 22.5531M23.6724 22.553L23.6655 22.5531M23.6655 22.5531C22.8726 22.5552 22.2315 23.1968 22.2287 23.9847L23.6655 22.5531ZM23.6708 22.5531C23.6714 22.5531 23.6719 22.5531 23.6724 22.5531L23.6708 22.5531Z" fill="white" stroke="white"/>
                                                                        </svg>
                                                                    </span>
                                                                </td>
                                                            <?php }else{ ?>

                                                                <td class="pe-0">
                                                                    <span>
                                                                        <svg width="14" height="23" viewBox="0 0 64 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <rect x="0.0517578" width="63.1713" height="63" rx="31.5" fill="#13B440"/>
                                                                            <path d="M40.78 32.7207L40.78 32.7207L40.7967 39.6289C40.7968 39.6326 40.7967 39.636 40.7967 39.6392L40.78 32.7207ZM40.78 32.7207C40.778 31.9272 40.1316 31.2854 39.3358 31.2873C38.5401 31.2892 37.8966 31.934 37.8985 32.7275L37.8985 32.7275L37.9068 36.1579L24.6872 22.9741C24.1246 22.413 23.2124 22.413 22.6497 22.9741C22.0871 23.5353 22.0871 24.445 22.6497 25.0061L35.8693 38.1899M40.78 32.7207L35.8693 38.1899M35.8693 38.1899L32.4297 38.1816L32.4296 38.1816C31.634 38.1797 30.9874 38.8214 30.9855 39.615L35.8693 38.1899ZM32.424 40.556L32.4228 41.0553C31.6273 41.0533 30.9836 40.4087 30.9855 39.615L32.424 40.556ZM32.424 40.556L32.4228 41.0553L39.3356 41.0719L39.3526 41.072L39.3529 41.072M32.424 40.556L39.3529 41.072M39.3529 41.072C39.3554 41.072 39.3577 41.072 39.3599 41.0719M39.3529 41.072L39.3599 41.0719M39.3599 41.0719C40.1528 41.0698 40.7939 40.4282 40.7967 39.6403L39.3599 41.0719ZM39.3545 41.0719C39.354 41.0719 39.3535 41.0719 39.3529 41.0719L39.3545 41.0719Z" fill="white" stroke="white"/>
                                                                        </svg>
                                                                    </span>
                                                            </td>

                                                            <?php } ?>
                                                            <td>
                                                                <span class="text-black font-w600">$<?php echo number_format($key['amount']); ?></span>
                                                            </td>
                                                            
                                                            <td><?php echo $formattedDatetime; ?></td>
                                                            
                                                            
                                                            <!-- <td>
                                                                <p class="mb-0 wspace-no">Lorem ipsum dol..<a href="javascript:(0);" class="text-secondary ms-1">More</a></p>
                                                            </td> -->
                                                            <td>
                                                                <?php 
                                                                if($key['t_status'] == 'pending'){ ?>
                                                                    <p href="javascript:void(0);" class="btn-link text-danger float-end">Pending</p>
                                                                <?php }else{?>
                                                                    <p href="javascript:void(0);" class="btn-link text-success float-end">Success</p>
                                                                <?php } ?>
                                                            </td>
                                                            <td>#<?php echo $key['pending_id']; ?></td>
                                                        </tr>
                                                        
                                                        <?php } ?>
                                                        
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