<?php 
   include("../admin/classes/Crud.php");
      $crud = new Crud();
   if (isset($_GET['id'])) {
   $id=$_GET['id'];
    $readcourses = $crud->Read("courses","`id`='$id'");
   }
   ?>
<?php include("header.php") ?>
      <!-- start banner Area -->
      <section class="banner-area relative about-banner" id="home">
         <div class="overlay overlay-bg"></div>
         <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
               <div class="about-content col-lg-12">
                  <h1 class="text-white">
                     Popular readcourses		
                  </h1>
                  <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="readcourses.php"> Popular readcourses</a></p>
               </div>
            </div>
         </div>
      </section>
      <!-- End banner Area -->	
      <?php 
         if($readcourses){
           $img=$readcourses[0]['image'];
           $head=$readcourses[0]['head'];
           $title=$readcourses[0]['title'];
           $description=$readcourses[0]['description'];
           $fee=$readcourses[0]['course_fee'];
           $eligible=$readcourses[0]['eligibility'];
           $seat=$readcourses[0]['seat_availability'];
           $duration=$readcourses[0]['duration'];
         
          ?>
      <!-- Start course-details Area -->
      <section class="course-details-area pt-120">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 left-contents">
                  <div class="main-image">
                     <img class="img-fluid" src="../admin/<?php echo $img;?>" alt="">
                  </div>
                  <div class="jq-tab-wrapper" id="horizontalTab">
                     <div class="jq-tab-menu">
                        <div class="jq-tab-title active" data-tab="1">Course Name</div>
                        <div class="jq-tab-title" data-tab="2">Course Details</div>
                        <div class="jq-tab-title" data-tab="3">Eligibility</div>
                     </div>
                     <div class="jq-tab-content-wrapper">
                        <div class="jq-tab-content active" data-tab="1">
                           <?php echo $head;?>
                        </div>
                        <div class="jq-tab-content" data-tab="2">
                           <?php echo $description;?>
                        </div>
                        <div class="jq-tab-content" data-tab="3">
                           <?php echo $eligible;?>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 right-contents">
                  <ul>
                     <li>
                        <a class="justify-content-between d-flex" href="#">
                           <p>Course Fee </p>
                           <span>Rs.<?php echo $fee;?>/-</span>
                        </a>
                     </li>
                     <li>
                        <a class="justify-content-between d-flex" href="#">
                           <p>Available Seats </p>
                           <span><?php echo $seat;?></span>
                        </a>
                     </li>
                     <li>
                        <a class="justify-content-between d-flex" href="#">
                           <p>Duration </p>
                           <span><?php echo $duration;?></span>
                        </a>
                     </li>
                  </ul>
                  <a href="#" class="primary-btn text-uppercase">Enroll the course</a>
               </div>
            </div>
         </div>
      </section>
      <!-- End course-details Area -->
      <?php }?>
      <!-- Start popular-readcourses Area --> 
      <section class="popular-readcourses-area section-gap readcourses-page">
         <div class="container">
            <div class="row d-flex justify-content-center">
               <div class="menu-content pb-70 col-lg-8">
                  <div class="title text-center">
                     <h1 class="mb-10">Popular readcourses we offer</h1>
                     <p>There is a moment in the life of any aspiring.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="single-popular-carusel col-lg-3 col-md-6">
                  <div class="thumb-wrap relative">
                     <div class="thumb relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="img/p1.jpg" alt="">
                     </div>
                     <div class="meta d-flex justify-content-between">
                        <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                        <h4>$150</h4>
                     </div>
                  </div>
                  <div class="details">
                     <a href="#">
                        <h4>
                           Learn Designing
                        </h4>
                     </a>
                     <p>
                        When television was young, there was a hugely popular show based on the still popular fictional characte										
                     </p>
                  </div>
               </div>
               <div class="single-popular-carusel col-lg-3 col-md-6">
                  <div class="thumb-wrap relative">
                     <div class="thumb relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="img/p2.jpg" alt="">
                     </div>
                     <div class="meta d-flex justify-content-between">
                        <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                        <h4>$150</h4>
                     </div>
                  </div>
                  <div class="details">
                     <a href="#">
                        <h4>
                           Learn React js beginners
                        </h4>
                     </a>
                     <p>
                        When television was young, there was a hugely popular show based on the still popular fictional characte										
                     </p>
                  </div>
               </div>
               <div class="single-popular-carusel col-lg-3 col-md-6">
                  <div class="thumb-wrap relative">
                     <div class="thumb relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="img/p3.jpg" alt="">
                     </div>
                     <div class="meta d-flex justify-content-between">
                        <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                        <h4>$150</h4>
                     </div>
                  </div>
                  <div class="details">
                     <a href="#">
                        <h4>
                           Learn Photography
                        </h4>
                     </a>
                     <p>
                        When television was young, there was a hugely popular show based on the still popular fictional characte										
                     </p>
                  </div>
               </div>
               <div class="single-popular-carusel col-lg-3 col-md-6">
                  <div class="thumb-wrap relative">
                     <div class="thumb relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="img/p4.jpg" alt="">
                     </div>
                     <div class="meta d-flex justify-content-between">
                        <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                        <h4>$150</h4>
                     </div>
                  </div>
                  <div class="details">
                     <a href="#">
                        <h4>
                           Learn Surveying
                        </h4>
                     </a>
                     <p>
                        When television was young, there was a hugely popular show based on the still popular fictional characte										
                     </p>
                  </div>
               </div>
               <a href="#" class="primary-btn text-uppercase mx-auto">Load More readcourses</a>													
            </div>
         </div>
      </section>
      <!-- End popular-readcourses Area -->					
      <!-- Start cta-two Area -->
      <section class="cta-two-area">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 cta-left">
                  <h1>Not Yet Satisfied with our Trend?</h1>
               </div>
               <div class="col-lg-4 cta-right">
                  <a class="primary-btn wh" href="#">view our blog</a>
               </div>
            </div>
         </div>
      </section>
      <!-- End cta-two Area -->						    			
      <!-- start footer Area -->		
      <footer class="footer-area section-gap">
         <div class="container">
            <div class="row">
               <div class="col-lg-2 col-md-6 col-sm-6">
                  <div class="single-footer-widget">
                     <h4>Top Products</h4>
                     <ul>
                        <li><a href="#">Managed Website</a></li>
                        <li><a href="#">Manage Reputation</a></li>
                        <li><a href="#">Power Tools</a></li>
                        <li><a href="#">Marketing Service</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-2 col-md-6 col-sm-6">
                  <div class="single-footer-widget">
                     <h4>Quick links</h4>
                     <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-2 col-md-6 col-sm-6">
                  <div class="single-footer-widget">
                     <h4>Features</h4>
                     <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-2 col-md-6 col-sm-6">
                  <div class="single-footer-widget">
                     <h4>Resources</h4>
                     <ul>
                        <li><a href="#">Guides</a></li>
                        <li><a href="#">Research</a></li>
                        <li><a href="#">Experts</a></li>
                        <li><a href="#">Agencies</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-4  col-md-6 col-sm-6">
                  <div class="single-footer-widget">
                     <h4>Newsletter</h4>
                     <p>Stay update with our latest</p>
                     <div class="" id="mc_embed_signup">
                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
                           <div class="input-group">
                              <input type="text" class="form-control" name="EMAIL" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
                              <div class="input-group-btn">
                                 <button class="btn btn-default" type="submit">
                                 <span class="lnr lnr-arrow-right"></span>
                                 </button>    
                              </div>
                              <div class="info"></div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer-bottom row align-items-center justify-content-between">
               <p class="footer-text m-0 col-lg-6 col-md-12">
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> &amp; distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
               </p>
               <div class="col-lg-6 col-sm-12 footer-social">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-dribbble"></i></a>
                  <a href="#"><i class="fa fa-behance"></i></a>
               </div>
            </div>
         </div>
      </footer>
      <!-- End footer Area -->	
      <script src="js/vendor/jquery-2.2.4.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="js/vendor/bootstrap.min.js"></script>			
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
      <script src="js/easing.min.js"></script>			
      <script src="js/hoverIntent.js"></script>
      <script src="js/superfish.min.js"></script>	
      <script src="js/jquery.ajaxchimp.min.js"></script>
      <script src="js/jquery.magnific-popup.min.js"></script>	
      <script src="js/jquery.tabs.min.js"></script>						
      <script src="js/jquery.nice-select.min.js"></script>	
      <script src="js/owl.carousel.min.js"></script>									
      <script src="js/mail-script.js"></script>	
      <script src="js/main.js"></script>	
   </body>
</html>
