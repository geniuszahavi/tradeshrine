<?php 
$page_title = "User Account | Tradeshrine";
include 'templates/head.php';
 
if($userDetails['verified'] == 0){
	header("Location: ./verify.php");
    exit();
}


$Payment = new Payments();
$histroy = $Payment->allTransactions($userID);

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
		<h4 class="font-w600 mb-2 me-auto">Transactions</h4>
		
		
	</div>	
	
	
	
		
		
		
		
		
	<div class="row">
		<div class="col-xl-4">
        <div class="dashboard">
  <div class="tabs">
    <button onclick="openTab('buy')">Buy</button>
    <button onclick="openTab('sell')">Sell</button>
  </div>

  <div id="buy" class="tabcontent">
    <select id="buyCrypto">
      <!-- Options for available cryptocurrencies -->
      <option value="BTC" data-icon="fab fa-bitcoin">Bitcoin</option>
    <option value="ETH" data-icon="fab fa-ethereum">Ethereum</option>
      <!-- Add other crypto options -->
    </select>
    <input type="number" id="buyAmount" placeholder="Amount">
    <button onclick="buyCrypto()">Buy</button>
  </div>

  <div id="sell" class="tabcontent">
    <select id="sellCrypto">
      <!-- Options for available cryptocurrencies -->
      <option value="BTC">Bitcoin</option>
      <option value="ETH">Ethereum</option>
      <!-- Add other crypto options -->
    </select>
    <input type="number" id="sellAmount" placeholder="Amount">
    <button onclick="sellCrypto()">Sell</button>
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


	<script src="public/js/functions.js" type="text/javascript"></script>
	<script src="public/js/shrine.js" type="text/javascript"></script>

    <script>
  function openTab(tabName) {
    // Hide all tabs
    var tabs = document.getElementsByClassName("tabcontent");
    for (var i = 0; i < tabs.length; i++) {
      tabs[i].style.display = "none";
    }

    // Show the selected tab
    document.getElementById(tabName).style.display = "block";
  }

  function buyCrypto() {
    // Implement buy logic here
    var selectedCrypto = document.getElementById("buyCrypto").value;
    var amount = document.getElementById("buyAmount").value;
    // Process the buy operation
    console.log("Buying", amount, selectedCrypto);
    // Perform API calls or backend operations for buying
  }

  function sellCrypto() {
    // Implement sell logic here
    var selectedCrypto = document.getElementById("sellCrypto").value;
    var amount = document.getElementById("sellAmount").value;
    // Process the sell operation
    console.log("Selling", amount, selectedCrypto);
    // Perform API calls or backend operations for selling
  }
</script>

</body>

</html>