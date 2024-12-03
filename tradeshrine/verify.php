<?php

$page_title = "Email Verification | Tradeshrine"; 
include 'ts_templates/head.php'; ?>


<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index.html"><img src="images/logo/logo.png" alt="" width="90"></a>
									</div>
                                    <h4 class="text-center mb-4">Email verification</h4>
                                    <p>Enter the code sent to e*****f@gmail.com</p>
                                    <form id="verify-form">
                                        <div class="mb-3">
                                            <label><strong>Verification Code</strong></label>
                                            <input type="password" id="verification-code" class="form-control" placeholder="*****" required>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Continue</button>
                                        </div>
                                    </form>
                                    <div id="message"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
    <!-- Common JS -->
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
</body>

</html>