<?php

include 'templates/head.php';

if(isset($_GET['ref'])){
  $ref_code =  $_GET['ref'];
  
}else{
  $ref_code = 0;
}

?>

<body>

  <!-- ===============>> Preloader start here <<================= -->
  <div class="preloader">
    <img src="assets/images/logo/bobis.png" width="70" alt="preloader icon">
  </div>
  <!-- ===============>> Preloader end here <<================= -->



  <!-- ===============>> light&dark switch start here <<================= -->
  <!-- <div class="lightdark-switch">
    <span class="dark-btn" id="btnSwitch"><img src="assets/images/icon/moon.svg" alt="light-dark-switchbtn"
        class="swtich-icon"></span>
  </div> -->
  <!-- ===============>> light&dark switch start here <<================= -->





  <!-- ===============>> Header section start here <<================= -->
  <?php include 'templates/navigation.php'; ?>

  <!-- ===============>> Header section end here <<================= -->


  <!-- ================> Page header start here <================== -->
  <section class="page-header bg--cover" style="background-image:url(assets/images/header/1.png)">
    <div class="container">
      <div class="page-header__content mt-5" data-aos="fade-right" data-aos-duration="1000">
        <h2>Create Account</h2>
        <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            
          </ol>
        </nav>
      </div>
      <div class="page-header__shape">
        <span class="page-header__shape-item page-header__shape-item--1"><img src="assets/images/header/2.png"
            alt="shape-icon"></span>
      </div>
    </div>
  </section>
  <!-- ================> Page header end here <================== -->





  <!-- ===============>> account start here <<================= -->
  <section class="account padding-top padding-bottom sec-bg-color2">
    <div class="container">
      <div class="account__wrapper" data-aos="fade-up" data-aos-duration="800">
        <div class="row g-4">
          <div class="col-12">
            <div class="account__content account__content--style1">

              <!-- account tittle -->
              <div class="account__header">
                <h2>Create Your Account</h2>
                <p>Hey there! Ready to join the party? We just need a few details from you to get started. Let's do
                  this!</p>
              </div>

              <!-- account social -->
              <!-- <div class="account__social">
                <a href="#" class="account__social-btn"><span><img src="assets/images/others/google.svg"
                      alt="google icon"></span>
                  Continue with google
                </a>
              </div> -->

              <!-- account divider -->
             

              <!-- account form -->
              <form class="account__form needs-validation" id="registration-form"
                novalidate>
                <div class="row g-4">
                  <div class="col-12 col-md-6">
                    <div>
                      <label for="first-name" class="form-label">First Name *</label>
                      <input class="form-control" type="text" id="first-name" placeholder="First Name" required>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div>
                      <label for="last-name" class="form-label">Last Name *</label>
                      <input class="form-control" type="text" id="last-name" placeholder="Last Name" required>
                    </div>
                  </div>
                  <div class="col-12">
                    <div>
                      <label for="account-email" class="form-label">Email *</label>
                      <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                    </div>
                  </div>
                  <div class="col-12">
                    <!-- <div> -->
                        <label for="account-country-code" class="form-label">Phone Number</label><br>
                        <input type="tel" id="phone" class="form-control" name="phone" placeholder="Enter your phone number" required max="10">
                        <small id="num-error"></small>
                    <!-- </div> -->
                  </div>
                  <div class="col-12">
                    <div class="form-pass">
                      <label for="account-pass" class="form-label">Password *</label>
                      <input type="password" class="form-control showhide-pass" id="pass-1" placeholder="Password"
                        required>

                      <button type="button" id="btnToggle" class="form-pass__toggle"><i id="eyeIcon1"
                          class="fa fa-eye"></i></button>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-pass">
                      <label for="account-cpass" class="form-label">Confirm Password *</label>
                      <input type="password" class="form-control showhide-pass" id="pass-2"
                        placeholder="Re-type password" required>

                      <button type="button" id="btnCToggle" class="form-pass__toggle"><i id="eyeIcon2"
                          class="fa fa-eye"></i></button>
                    </div>
                  </div>
                </div>
                <div class="account__check">

                  <div class="account__check-remember">
                    <input type="checkbox" class="form-check-input" value="" id="terms-check">
                    <label for="terms-check" class="form-check-label">
                      By completing this registration form, you agree to Tradeshrine <a href="terms.php">Terms of Service</a>.
                    </label>
                  </div>
                  
                </div>
                




                <small class="small" id="talkBackText"></small>
                <button type="submit" class="trk-btn trk-btn--border trk-btn--primary d-block mt-4">Sign Up</button>
                
 

                <div id="success"></div>

              </form>


              <div class="account__switch">
                <p>Already have an account? <a href="signin.php">Login</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="account__shape">
      <span class="account__shape-item account__shape-item--1"><img src="assets/images/contact/4.png"
          alt="shape-icon"></span>
    </div>
  </section>
  <!-- ===============>> account end here <<================= -->



<input type="hidden" value="<?php echo $ref_code;?>" id="ref-code">

  <!-- ===============>> footer start here <<================= -->
  <footer class="footer brand-1">
    <div class="container">
      <div class="footer__wrapper">
        <div class="footer__top footer__top--style1">
          <div class="row gy-5 gx-4">
            <div class="col-md-6">
              <div class="footer__about">
                <a href="index-3.html" class="footer__about-logo"><img width="60" src="assets/images/logo/bobis.png"
                    alt="Logo"></a>
                <p class="footer__about-moto ">Tradeshrine is committed to empowering users and broadening their
                  financial knowledge so they can make informed decisions and manage their finances effectively.</p>
                <div class="footer__app">
                  <div class="footer__app-item footer__app-item--apple">
                    <div class="footer__app-inner">
                      <div class="footer__app-thumb">
                        <a href="https://www.apple.com/app-store/" target="_blank" class="stretched-link">
                          <img src="assets/images/footer/apple.png" alt="apple-icon">
                        </a>
                      </div>
                      <div class="footer__app-content">
                        <span>Download on the</span>
                        <p class="mb-0">App Store</p>
                      </div>
                    </div>
                  </div>
                  <div class="footer__app-item footer__app-item--playstore">
                    <div class="footer__app-inner">
                      <div class="footer__app-thumb">
                        <a href="https://play.google.com/store" target="_blank" class="stretched-link">
                          <img src="assets/images/footer/play.png" alt="playstore-icon">
                        </a>
                      </div>
                      <div class="footer__app-content">
                        <span>GET IT ON</span>
                        <p class="mb-0">Google Play</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="col-md-2 col-sm-4 col-6">
              <div class="footer__links">
                <div class="footer__links-tittle">
                  <h6>Quick links</h6>
                </div>
                <div class="footer__links-content">
                  <ul class="footer__linklist">
                    <li class="footer__linklist-item"> <a href="about.html">About Us</a>
                    </li>
                    <li class="footer__linklist-item"> <a href="team.html">Teams</a>
                    </li>
                    <li class="footer__linklist-item"> <a href="service.html">Services</a> </li>
                    <li class="footer__linklist-item"> <a href="#">Features</a>
                    </li>
                  </ul>
                </div>
              </div>

            </div> -->
            <div class="col-md-2 col-sm-4 col-6">
              <div class="footer__links">
                <div class="footer__links-tittle">
                  <h6>Navigation</h6>
                </div>
                <div class="footer__links-content">
                  <ul class="footer__linklist">
                    <li class="footer__linklist-item"> <a href="#"> About Us</a>
                    </li>
                    <li class="footer__linklist-item"> <a href="#"> Services</a>
                    </li>
                    <li class="footer__linklist-item"> <a href="#"> Academy</a></li>
                    <li class="footer__linklist-item"> <a href="#"> Pricing</a> </li>
                    <li class="footer__linklist-item"> <a href="#"> FAQs</a> </li>
                  </ul>
                </div>
              </div>

            </div>
            <div class="col-md-2 col-sm-4">
              <div class="footer__links">
                <div class="footer__links-tittle">
                  <h6>Company</h6>
                </div>
                <div class="footer__links-content">
                  <ul class="footer__linklist">
                    <li class="footer__linklist-item"> <a href="#">Careers</a>
                    </li>
                    <li class="footer__linklist-item"> <a href="#">Updates</a>
                    </li>
                    <li class="footer__linklist-item"> <a href="#">Job</a> </li>
                    <li class="footer__linklist-item"> <a href="#">Announce</a>
                    </li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="footer__bottom">
          <div class="footer__end">
            <div class="footer__end-copyright">
              <p class=" mb-0"><a href="#">Tradeshrine</a> © 2024 </p>
            </div>
            <div>
              <ul class="social">
                <li class="social__item">
                  <a href="#" class="social__link social__link--style22"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="social__item">
                  <a href="#" class="social__link social__link--style22 "><i class="fab fa-instagram"></i></a>
                </li>
                <li class="social__item">
                  <a href="#" class="social__link social__link--style22"><i class="fa-brands fa-linkedin-in"></i></a>
                </li>
                <li class="social__item">
                  <a href="#" class="social__link social__link--style22"><i class="fab fa-youtube"></i></a>
                </li>
                <li class="social__item">
                  <a href="#" class="social__link social__link--style22 "><i class="fab fa-twitter"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer__shape">
      <span class="footer__shape-item footer__shape-item--1"><img src="assets/images/footer/1.png"
          alt="shape icon"></span>
      <span class="footer__shape-item footer__shape-item--2"> <span></span> </span>
    </div>
  </footer>
  <!-- ===============>> footer end here <<================= -->



  <!-- vendor plugins -->

  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/all.min.js"></script>
  <script src="assets/js/swiper-bundle.min.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/fslightbox.js"></script>
  <script src="assets/js/purecounter_vanilla.js"></script>

  
  <!-- International Telephone Input CSS -->
  
  <!-- intl-tel-input JS -->
<!-- intl-tel-input CSS -->

<!-- intl-tel-input JS -->

<!-- libphonenumber -->
  <!-- libphonenumber -->
  
  <script src="build/js/intlTelInput.js"></script>

  <script src="assets/js/custom.js"></script>
  <script src="assets/js/auth.js"></script>
  <script src="assets/js/functions.js"></script>


</body>



</html>