<?php

include 'templates/head.php';

?>

<body>

 <!-- ===============>> Preloader start here <<================= -->
 <!-- <div class="preloader">
   <img src="assets/images/logo/bobis.png"  width="100" alt="preloader icon">
 </div> -->
 <!-- ===============>> Preloader end here <<================= -->



 <!-- ===============>> light&dark switch start here <<================= -->
 <!-- <div class="lightdark-switch d-none">
   <span class="dark-btn" id="btnSwitch"><img src="assets/images/icon/moon.svg" alt="light-dark-switchbtn"
       class="swtich-icon"></span>
 </div> -->
 <!-- ===============>> light&dark switch start here <<================= -->




<!-- ===============>> Header section start here <<================= -->
<?php include 'templates/navigation.php'; ?>
<!-- ===============>> Header section end here <<================= -->



  <!-- ================> Page header start here <================== -->
  <section class="page-header bg--cover " style="background-image:url(assets/images/header/1.png)">
    <div class="container">
      <div class="page-header__content mt-5" data-aos="fade-right" data-aos-duration="1000">
        <h2>Contact Us</h2>
        <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item "><a href="index-3.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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





  <!-- ===============>> Contact section start here <<================= -->
  <div class="contact padding-top padding-bottom">
    <div class="container">
      <div class="contact__wrapper">
        <div class="row g-5">
          <div class="col-md-5">
            <div class="contact__info" data-aos="fade-right" data-aos-duration="1000">
              <div class="contact__social">
                <h3>Get In<span> Touch </span>
                  with us</h3>
                <ul class="social">
                  <li class="social__item">
                    <a href="#" class="social__link social__link--style4 active"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li class="social__item">
                    <a href="#" class="social__link social__link--style4 "><i class="fab fa-instagram"></i></a>
                  </li>
                  <li class="social__item">
                    <a href="#" class="social__link social__link--style4"><i class="fa-brands fa-linkedin-in"></i></a>
                  </li>
                  <li class="social__item">
                    <a href="#" class="social__link social__link--style4"><i class="fab fa-youtube"></i></a>
                  </li>
                  <li class="social__item">
                    <a href="signin.html" class="social__link social__link--style4"><i class="fab fa-twitter"></i></a>
                  </li>
                </ul>
              </div>
              <div class="contact__details">
                <div class="contact__item" data-aos="fade-right" data-aos-duration="1000">
                  <div class="contact__item-inner">
                    <div class="contact__item-thumb">
                      <span><img src="assets/images/contact/1.png" alt="contact-icon" class="dark"></span>
                    </div>
                    <div class="contact__item-content">
                      <p>
                      
                      </p>
                      <p class="text-success">
                        +234 703 982 3957
                      </p>
                    </div>
                  </div>
                </div>
                <div class="contact__item" data-aos="fade-right" data-aos-duration="1100">
                  <div class="contact__item-inner">
                    <div class="contact__item-thumb">
                      <span><img src="assets/images/contact/2.png" alt="contact-icon" class="dark"></span>
                    </div>
                    <div class="contact__item-content">
                      <p class="text-success">
                        info@tradeshrine.com
                      </p>
                      <!-- <p>
                        hello@gmail.com
                      </p> -->
                    </div>
                  </div>
                </div>
                <div class="contact__item" data-aos="fade-right" data-aos-duration="1200">
                  <div class="contact__item-inner">
                    <div class="contact__item-thumb">
                      <span><img src="assets/images/contact/3.png" alt="contact-icon" class="dark"></span>
                    </div>
                    <div class="contact__item-content">
                      <p class="text-success">
                        88 Sheridan Street
                      </p>
                      <p class="text-success">
                        534 Victoria Trail
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="contact__form">
              <form action="#" id="contact-form" method="post" data-aos="fade-left" data-aos-duration="1000">
                <div class="row g-4">
                  <div class="col-12">
                    <div>
                      <label for="name" class="form-label text-success">Name</label>
                      <input class="form-control" type="text" id="name" placeholder="Full Name">
                    </div>
                  </div>
                  <div class="col-12">
                    <div>
                      <label for="email" class="form-label text-success">Email</label>
                      <input class="form-control" type="email" id="email" placeholder="Email here">
                    </div>
                  </div>
                  <div class="col-12">
                    <div>
                      <label for="textarea" class="form-label text-success">Message</label>
                      <textarea cols="30" rows="5" class="form-control" id="textarea"
                        placeholder="Enter Your Message"></textarea>
                    </div>
                  </div>
                </div>
                <div id="talkBackText"></div>
                <div id="success"></div>
                <button type="submit" class="trk-btn trk-btn--border trk-btn--primary mt-4 d-block">contact us
                  now</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="contact__shape">
      <span class="contact__shape-item contact__shape-item--1"><img src="assets/images/contact/4.png"
          alt="shape-icon"></span>
      <span class="contact__shape-item contact__shape-item--2"> <span></span> </span>
    </div>
  </div>
  <!-- ===============>> Contact section start here <<================= -->




 <!-- ===============>> footer start here <<================= -->
 <?php include 'templates/footer.php'; ?>
 <!-- ===============>> footer end here <<================= -->





  <!-- ===============>> scrollToTop start here <<================= -->
  <a href="#" class="scrollToTop scrollToTop--home1"><i class="fa-solid fa-arrow-up-from-bracket"></i></a>
  <!-- ===============>> scrollToTop ending here <<================= -->


  <!-- vendor plugins -->

  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/all.min.js"></script>
  <script src="assets/js/swiper-bundle.min.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/fslightbox.js"></script>
  <script src="assets/js/purecounter_vanilla.js"></script>



  <script src="assets/js/custom.js"></script>


</body>


</html>