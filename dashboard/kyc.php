<?php

$page_title = "Email Verification | Tradeshrine"; 
include 'templates/head.php'; ?>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
    <div class="authincation-content">
        <div class="row no-gutters">
            <div class="col-xl-12">
                <div class="auth-form">
                    <div class="text-center mb-5 ">
                        <a href="index.php"><img src="public/images/logo.png" width="50" alt="" class="mb-5"></a>
                    </div>
                    <h4 class="text-center mb-4">Email Verification</h4>
                    <p>Enter the code sent to e*****f@gmail.com</p>
                    <form id="emial-verifiy-form">
                        <div class="mb-3">
                            <label><strong>Email</strong></label>
                            <input id="emial-verifiy-form" type="text" class="form-control" placeholder="_ _ _ _ _ _" maxlength="6">
                        </div>
                        <div class="text-center">
                            <p id="error-report" class="text-danger"></p>
                            <button type="submit" class="btn btn-primary btn-block">Confirm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
	<!-- Required vendors -->
                        <script src="public/vendor/global/global.min.js" type="text/javascript"></script>
                    <script src="public/vendor/jquery-nice-select/js/jquery.nice-select.min.js" type="text/javascript"></script>
                    <script src="public/js/deznav-init.js" type="text/javascript"></script>
                    <script src="public/js/auth.js" type="text/javascript"></script>
            
    
</body>

</html>