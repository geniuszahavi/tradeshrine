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
 <section class="page-header bg--cover" style="background-image:url(assets/images/header/1.png)">
    <div class="container">
      <div class="page-header__content mt-5" data-aos="fade-right" data-aos-duration="1000">
        <h2>Services</h2>
        <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item "><a href="index-3.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Services</li>
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











<!-- ===============>> Service section start here <<================= -->
<section class="service padding-top padding-bottom">
 <div class="section-header section-header--max50">
   <h2 class="mb-15 mt-minus-5"><span>services </span>We offer</h2>
   <p class="text-success">We offer the best trading services to enthusiasts, investors and future traders</p>
 </div>
 <div class="container">
   <div class="service__wrapper">
     <div class="row g-4 align-items-center">
       <div class="col-sm-6 col-md-6 col-lg-4">
         <div class="service__item" data-aos="fade-up" data-aos-duration="800">
           <div class="service__item-inner text-center">
             <div class="service__thumb mb-30">
               <div class="service__thumb-inner">
                 <img class="dark" src="assets/images/service/1.png" alt="service-icon">
               </div>
             </div>
             <div class="service__content">
               <h5 class="mb-15"> <a class="stretched-link" href="service-details.html">	Trading Academy</a> </h5>
               <p class="mb-0 text-success">Our Trading Academy offers a variety of fundamental and advanced courses on various trading topics.</p>
             </div>
           </div>
         </div>
       </div>
       <div class="col-sm-6 col-lg-4">
         <div class="service__item" data-aos="fade-up" data-aos-duration="1000">
           <div class="service__item-inner text-center">
             <div class="service__thumb mb-30">
               <div class="service__thumb-inner">
                 <img class="dark" src="assets/images/service/2.png" alt="service-icon">
               </div>
             </div>
             <div class="service__content">
               <h5 class="mb-15"> <a class="stretched-link" href="service-details.html">	Payment solutions</a> </h5>
               <p class="mb-0  text-success">We offer a variety of payment solutions, including gift card trading and peer-to-peer (P2P) trading.
               </p>
             </div>
           </div>
         </div>
       </div>
       <div class="col-sm-6 col-lg-4">
         <div class="service__item" data-aos="fade-up" data-aos-duration="1200">
           <div class="service__item-inner text-center">
             <div class="service__thumb mb-30">
               <div class="service__thumb-inner">
                 <img class="dark" src="assets/images/service/3.png" alt="service-icon">
               </div>
             </div>
             <div class="service__content">
               <h5 class="mb-15"> <a class="stretched-link" href="service-details.html">	Financial literacy education</a> </h5>
               <p class="mb-0 text-success">We also offer courses on becoming a marketer through affiliate earning programs and becoming a crypto vendor/picker for international transactions.</p>
             </div>
           </div>
         </div>
       </div>
       <div class="col-sm-6 col-lg-4">
         <div class="service__item" data-aos="fade-up" data-aos-duration="800">
           <div class="service__item-inner text-center">
             <div class="service__thumb mb-30">
               <div class="service__thumb-inner">
                 <img class="dark" src="assets/images/service/4.png" alt="service-icon">
               </div>
             </div>
             <div class="service__content">
               <h5 class="mb-15"> <a class="stretched-link" href="service-details.html">	Trading signals </a>
               </h5>
               <p class="mb-0 text-success">We offer a premium trading signal service that provides users with timely and accurate trading signals</p>
             </div>
           </div>
         </div>
       </div>
       <div class="col-sm-6 col-lg-4">
         <div class="service__item" data-aos="fade-up" data-aos-duration="1000">
           <div class="service__item-inner text-center">
             <div class="service__thumb mb-30">
               <div class="service__thumb-inner">
                 <img class="dark" src="assets/images/service/5.png" alt="service-icon">
               </div>
             </div>
             <div class="service__content">
               <h5 class="mb-15"> <a class="stretched-link" href="service-details.html">Crypto Vendor/Crypto Remittance Services</a> </h5>
               <p class="mb-0 text-success">We offer crypto vendor/picker services for international transactions.</p>
             </div>
           </div>
         </div>
       </div>
       <div class="col-sm-6 col-lg-4">
         <div class="service__item" data-aos="fade-up" data-aos-duration="1200">
           <div class="service__item-inner text-center">
             <div class="service__thumb mb-30">
               <div class="service__thumb-inner">
                 <img class="dark" src="assets/images/service/6.png" alt="service-icon">
               </div>
             </div>
             <div class="service__content">
               <h5 class="mb-15"> <a class="stretched-link" href="service-details.html">Affiliate program</a>
               </h5>
               <p class="mb-0 text-success">We offer an affiliate program that allows users to earn commissions by referring their friends and family to Tradeshrine</p>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
</section>
<!-- ===============>> Service section start here <<================= -->

<!-- ========== Roadmap Section start Here========== -->
<section class="roadmap roadmap--style1 padding-top  padding-bottom bg-color" id="roadmap">
 <div class="container">
   <div class="section-header section-header--max50">
     <h2 class="mb-15 mt-minus-5">Our  <span> Academy</span></h2>
     <p>Explore our course offerings and register for what best fits your learning needs.</p>
   </div>
   <div class="roadmap__wrapper">
     <div class="row gy-4 gy-md-0 gx-5">
       <div class="col-md-6 offset-md-6">
         <div class="roadmap__item ms-md-4 aos-init aos-animate" data-aos="fade-left" data-aos-duration="800">
           <div class="roadmap__item-inner">
             <div class="roadmap__item-content">
               <div class="roadmap__item-header">
                 <h3>Fundamentals Courses</h3>
                 <!-- <span>P1</span> -->
               </div>
               <p class="text-success">Learn the basics of digital currency, trading, and market analysis..</p>
             </div>
           </div>

         </div>
       </div>
       <div class="col-md-6">
         <div class="roadmap__item roadmap__item--style2 ms-auto me-md-4 aos-init aos-animate" data-aos="fade-right"
           data-aos-duration="800">
           <div class="roadmap__item-inner">
             <div class="roadmap__item-content">
               <div class="roadmap__item-header">
                 <h3>	Advanced Courses</h3>
                 <!-- <span></span> -->
               </div>
               <p class="text-success">Take your trading skills to the next level with in-depth courses on gift card trading, spot trading, futures trading, and more.</p>
             </div>
           </div>

         </div>
       </div>
       <div class="col-md-6 offset-md-6">
         <div class="roadmap__item ms-md-4 aos-init" data-aos="fade-left" data-aos-duration="800">
           <div class="roadmap__item-inner">
             <div class="roadmap__item-content">
               <div class="roadmap__item-header">
                 <h3>Trading Signal Group</h3>
                 <!-- <span>P3</span> -->
               </div>
               <p class="text-success">Get access to exclusive trading signals from a team of experienced traders.</p>
             </div>
           </div>
         </div>
       </div>
       <div class="col-md-6">
         <div class="roadmap__item roadmap__item--style2 ms-auto me-md-4 aos-init" data-aos="fade-right"
           data-aos-duration="800">
           <div class="roadmap__item-inner">
             <div class="roadmap__item-content">
               <div class="roadmap__item-header">
                 <h3>Affiliate Earning Program</h3>
                 <!-- <span>P4</span> -->
               </div>
               <p class="text-success">Learn how to earn money by promoting  Tradeshrine products and services to others.</p>
             </div>
           </div>

         </div>
       </div>
       <div class="col-md-6 offset-md-6">
         <div class="roadmap__item ms-md-4 aos-init" data-aos="fade-left" data-aos-duration="800">
           <div class="roadmap__item-inner">
             <div class="roadmap__item-content">
               <div class="roadmap__item-header">
                 <h3>	Crypto Vendor/Picker Program</h3>
                 <!-- <span>P5</span> -->
               </div>
               <p class="text-success">Learn how to become a crypto vendor or picker and earn money by helping others buy and sell cryptocurrencies.</p>
             </div>
           </div>
         </div>
       </div>
       <div class="col-md-6">
         <div class="roadmap__item roadmap__item--style2 ms-auto me-md-4 aos-init" data-aos="fade-right"
           data-aos-duration="800">
           <div class="roadmap__item-inner">
             <div class="roadmap__item-content">
               <div class="roadmap__item-header">
                 <h3>	P2P Trading Course</h3>
                 <!-- <span>P6</span> -->
               </div>
               <p class="text-success">Learn how to trade cryptocurrencies directly with other users without using a centralized exchange.</p>
             </div>
           </div>

         </div>
       </div>
     </div>
   </div>
 </div>
 <div class="roadmap__shape">
   <span class="roadmap__shape-item roadmap__shape-item--1"> <span></span> </span>
   <span class="roadmap__shape-item roadmap__shape-item--2"> <img src="assets/images/icon/1.png" alt="shape-icon">
   </span>
 </div>
</section>








 <!-- ===============>> Blog section start here <<================= -->
 <!-- <section class="blog padding-top padding-bottom of-hidden">
   <div class="container">
     <div class="section-header d-flex align-items-center justify-content-between">
       <div class="section-header__content section-header__content--style3">
         <h2 class="mb-0">Popular Trading <span class="style2">Articles </span></h2>
       </div>
       <div class="section-header__action">
         <div>
           <a href="blogs.html" class="trk-btn trk-btn--border trk-btn--secondary">View All</a>
         </div>
       </div>
     </div>
     <div class="blog__wrapper">
       <div class="row g-4">
         <div class="col-md-6">
           <div class="blog__item blog__item--style2" data-aos="fade-right" data-aos-duration="1000">
             <div class="blog__item-inner blog__item-inner--style2 pt-30 px-30 pb-40">
               <div class="blog__thumb">
                 <img src="assets/images/blog/4.png" alt="blog Images">
               </div>

               <div class="blog__content mt-30">
                 <h5 class="style2"> <a href="blog-details.html">Top 10 Tips for Successful Trading.</a> </h5>

                 <p class="mb-15">Follow these 10 trading tips: research, diversify, stay disciplined, risk smartly,
                   stay informed, trade small, stay patient, track performance, ignore emotions.
                 </p>

                 <a href="blog-details.html" class="text-btn text-btn--style2">Read more <i
                     class="fa-solid fa-angle-right"></i></a>
               </div>
             </div>
           </div>
         </div>
         <div class="col-md-6">
           <div class="blog__item blog__item--style2" data-aos="fade-left" data-aos-duration="1000">
             <div class="blog__item-inner blog__item-inner--style2 pt-30 px-30 pb-40">
               <div class="blog__thumb">
                 <img src="assets/images/blog/5.png" alt="blog Images">
               </div>

               <div class="blog__content mt-30">
                 <h5 class="style2"> <a href="blog-details.html">Trading Wins and Losses in the Market!</a>
                 </h5>

                 <p class="mb-15">Trading Tales reminds us that profits and losses are part of the investment game, but
                   it's the lessons learned that truly matter. Keep calm and trade on!</p>

                 <a href="blog-details.html" class="text-btn text-btn--style2">Read more <i
                     class="fa-solid fa-angle-right"></i></a>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <div class="blog__shape">
     <span class="blog__shape-item blog__shape-item--1"> <span></span> </span>
   </div>
 </section> -->
 <!-- ===============>> Blog section start here <<================= -->





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
             <p>Sign up for our newsletter to receive the latest news and updates about  Tradeshrine, as well as exclusive offers and discounts.</p>
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

<?php include 'templates/scripts.php'; ?>


</body>
</html>