<?php

$page_title = "Tradeshrine Academy";
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
  <section class="page-header bg--cover" style="background-image:url(assets/images/header/1.png)">
    <div class="container">
      <div class="page-header__content mt-5" data-aos="fade-right" data-aos-duration="1000">
        <h2>Academy</h2>
        <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <!-- <li class="breadcrumb-item "><a href="index-3.html">Shrine</a></li> -->
            <!-- <li class="breadcrumb-item active" aria-current="page">Academy</li> -->
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





  <!-- ===============>> Story section start here <<================= -->
  <div class="story padding-top bg-color-3">
    <div class="container" >
      <div class="story__wrapper">
        <div class="story__thumb mb-5" >
          <div class="story__thumb-inner" data-aos="fade-up" data-aos-duration="800">
            <img src="assets/images/about/videbg.png" alt="story-image">
            <div class="story__thumb-playbtn">
              <a href="https://youtu.be/Pl8OlkkwRpc?si=0XjtWmbAvyISH4JR" data-fslightbox><i
                  class="fa-solid fa-circle-play"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="story__shape">
      <span class="story__shape-item story__shape-item--1"><span></span> </span>
    </div>
  </div>
  <!-- ===============>> Story section end here <<================= -->








  <!-- ========== Roadmap Section start Here========== -->
  
  <!-- ========== Roadmap Section Ends Here========== -->






  <!-- ===============>> Team section start here <<================= -->
  <!-- <section class="team padding-top padding-bottom bg-color">
    <div class="section-header section-header--max50">
      <h2 class="mb-15 mt-minus-5">Meet our <span>advisers</span></h2>
      <p class="flip">Our team of experienced and knowledgeable advisers who are passionate about helping others succeed.</p>
    </div>
    <div class="container">
      <div class="team__wrapper">
        <div class="row g-4 align-items-center">
          <div class="col-sm-6 col-lg-3">
            <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="800">
              <div class="team__item-inner team__item-inner--shape">
                <div class="team__item-thumb team__item-thumb--style1">
                  <img src="assets/images/team/1.png" alt="Team Image" class="dark">
                </div>
                <div class="team__item-content team__item-content--style1">
                  <div class="team__item-author team__item-author--style1">
                    <div class="team__item-authorinfo">
                      <h6 class="mb-1"><a href="team-details.html" class="stretched-link cold">Dianne Russell</a> </h6>
                      <p class="mb-0">Trade Captain</p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="900">
              <div class="team__item-inner team__item-inner--shape">
                <div class="team__item-thumb team__item-thumb--style1">
                  <img src="assets/images/team/2.png" alt="Team Image" class="dark">
                </div>
                <div class="team__item-content team__item-content--style1">
                  <div class="team__item-author team__item-author--style1">
                    <div class="team__item-authorinfo">
                      <h6 class="mb-1"><a href="team-details.html" class="stretched-link cold">Theresa Webb</a> </h6>
                      <p class="mb-0">Strategic Advisor</p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="1000">
              <div class="team__item-inner team__item-inner--shape">
                <div class="team__item-thumb team__item-thumb--style1">
                  <img src="assets/images/team/3.png" alt="Team Image" class="dark">
                </div>
                <div class="team__item-content team__item-content--style1">
                  <div class="team__item-author team__item-author--style1">
                    <div class="team__item-authorinfo">
                      <h6 class="mb-1"><a href="team-details.html" class="stretched-link cold">Courtney Henry</a> </h6>
                      <p class="mb-0">Management Consultant</p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="1100">
              <div class="team__item-inner team__item-inner--shape">
                <div class="team__item-thumb team__item-thumb--style1">
                  <img src="assets/images/team/4.png" alt="Team Image" class="dark">
                </div>
                <div class="team__item-content team__item-content--style1">
                  <div class="team__item-author team__item-author--style1">
                    <div class="team__item-authorinfo">
                      <h6 class="mb-1"><a href="team-details.html" class="stretched-link cold">Albert Flores</a> </h6>
                      <p class="mb-0">Development Specialist</p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="800">
              <div class="team__item-inner team__item-inner--shape">
                <div class="team__item-thumb team__item-thumb--style1">
                  <img src="assets/images/team/5.png" alt="Team Image" class="dark">
                </div>
                <div class="team__item-content team__item-content--style1">
                  <div class="team__item-author team__item-author--style1">
                    <div class="team__item-authorinfo">
                      <h6 class="mb-1"><a href="team-details.html" class="stretched-link cold">Darrell Steward</a> </h6>
                      <p class="mb-0">Growth Strategist</p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="900">
              <div class="team__item-inner team__item-inner--shape">
                <div class="team__item-thumb team__item-thumb--style1">
                  <img src="assets/images/team/6.png" alt="Team Image" class="dark">
                </div>
                <div class="team__item-content team__item-content--style1">
                  <div class="team__item-author team__item-author--style1">
                    <div class="team__item-authorinfo">
                      <h6 class="mb-1"><a href="team-details.html" class="stretched-link cold">Wade Warren</a> </h6>
                      <p class="mb-0">Trade Consultant</p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="1000">
              <div class="team__item-inner team__item-inner--shape">
                <div class="team__item-thumb team__item-thumb--style1">
                  <img src="assets/images/team/7.png" alt="Team Image" class="dark">
                </div>
                <div class="team__item-content team__item-content--style1">
                  <div class="team__item-author team__item-author--style1">
                    <div class="team__item-authorinfo">
                      <h6 class="mb-1"><a href="team-details.html" class="stretched-link cold">Cody Fisher</a> </h6>
                      <p class="mb-0">HR Consultant</p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="1100">
              <div class="team__item-inner team__item-inner--shape">
                <div class="team__item-thumb team__item-thumb--style1">
                  <img src="assets/images/team/8.png" alt="Team Image" class="dark">
                </div>
                <div class="team__item-content team__item-content--style1">
                  <div class="team__item-author team__item-author--style1">
                    <div class="team__item-authorinfo">
                      <h6 class="mb-1"><a href="team-details.html" class="stretched-link cold">Bessie Cooper</a> </h6>
                      <p class="mb-0">Financial Advisor</p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="text-center">
            <a href="team.html" class="trk-btn trk-btn--border trk-btn--primary mt-25">View more </a>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- ===============>> Team section start here <<================= -->






  <!-- ===============>> cta section start here <<================= -->
  <section class="cta padding-top padding-bottom  bg-color">
    <div class="container">
      <div class="cta__wrapper">
        <div class="cta__newsletter justify-content-center">
          <div class="cta__newsletter-inner" data-aos="fade-up" data-aos-duration="1000">
            <div class="cta__thumb">
              <img src="assets/images/cta/3.png" alt="cta-thumb">
            </div>
            <div class="cta__subscribe">
              <h2 > <span>Subscribe To</span> Our Newsletter Card</h2>
              <p>Sign up for our newsletter to receive the latest news and updates about Bobis Resources, as well as exclusive offers and discounts</p>
              <form class="cta-form cta-form--style2 form-subscribe" action="#">
                <div class="cta-form__inner d-sm-flex align-items-center">
                  <input type="email" class="form-control form-control--style2 mb-3 mb-sm-0"
                    placeholder="Email Address">
                  <button class="trk-btn  trk-btn--large trk-btn--secondary2" type="submit">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="cta__shape">
          <span class="cta__shape-item cta__shape-item--1"><img src="assets/images/cta/2.png" alt="shape icon"></span>
          <span class="cta__shape-item cta__shape-item--2"><img src="assets/images/cta/4.png" alt="shape icon"></span>
          <span class="cta__shape-item cta__shape-item--3"><img src="assets/images/cta/5.png" alt="shape icon"></span>
        </div>
      </div>
    </div>
  </section>
  <!-- ===============>> cta section start here <<================= -->





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