
<?php  
   $dbhost = 'localhost';  
   $dbuser = "root";  
   $dbpass = ""; 
   $dbname = 'iti_kok'; 
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname) or die ('Error connecting to mysql');  
     
   // $connection = mysql_select_db($dbname); 
     
    
   
   
   if (isset($_GET["page"])) {
    
    $page  = $_GET["page"]; 
   } 
   else { 
      $page=1; 
   };  
   $limit = 6;
   $offset = ($page-1) * $limit; 
   
     
   $sql = "SELECT * FROM courses ORDER BY id DESC  limit $offset, $limit";  
   
   $rs_result = mysqli_query ($conn,$sql); 
   $row=mysqli_num_rows($rs_result); 
   
   ?>
<?php include("header.php") ?>
      <!-- start banner Area -->
      <section class="banner-area relative about-banner" id="home">
         <div class="overlay overlay-bg"></div>
         <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
               <div class="about-content col-lg-12">
                  <h1 class="text-white">
                     Popular Courses      
                  </h1>
                  <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="courses.php"> Popular Courses</a></p>
               </div>
            </div>
         </div>
      </section>
      <!-- End banner Area -->   
      <!-- Start popular-courses Area --> 
      <section class="popular-courses-area section-gap courses-page">
         <div class="container">
            <div class="row d-flex justify-content-center">
               <div class="menu-content pb-70 col-lg-8">
                  <div class="title text-center">
                     <h1 class="mb-10">Popular Courses we offer</h1>
                     <p>There is a moment in the life of any aspiring.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <?php 
                  if ($read5) {
                                     $n=0;
                                     foreach ($read5 as $courses)
                                      {
                                    while ($courses = mysqli_fetch_assoc($rs_result))
                                    {
                  ?>
               <div class="single-popular-carusel col-lg-3 col-md-6">
                  <div class="thumb-wrap relative">
                     <div class="thumb relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="../Admin/<?php echo $courses['image'] ;?>" alt="">
                     </div>
                     <div class="meta d-flex justify-content-between">
                        <!-- <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p> -->
                        <h4>Rs.<?php echo $courses['course_fee'] ;?>/-</h4>
                     </div>
                  </div>
                  <div class="details">
                     <a href="course-details.php?id=<?php echo $courses['id'] ;?>">
                        <h4>
                           <?php echo $courses['head'] ;?>
                        </h4>
                     </a>
                     <p class="read_more">
                        <?php echo $courses['title'] ;?>                            
                     </p>
                  </div>
               </div>
               <?php }}}?>
               <?php  
                  $sql1 = "SELECT * FROM courses";  
                  $rs_result1 = mysqli_query($conn,$sql1) or die("query failed");  
                  if( mysqli_num_rows($rs_result1)>0);{
                  // echo $row;  
                  $total_records = mysqli_num_rows($rs_result1);
                    
                  $total_pages = ceil($total_records / $limit);  
                  // $pagLink = "<ul class='pagination'>"; 
                  } 
                  // for ($i=1; $i<=$total_pages; $i++) {  
                  //              $pagLink .= "<li><a href='eventsSEED.php?page=".$i."'>".$i."</a></li>";  
                  // }
                  // } 
                  // echo $pagLink . "</ul>";  
                  ?>
            </div>
            <nav class="blog-pagination justify-content-center d-flex">
               <ul class="pagination">
                  <?php if ($page > 1) { ?>
                  <li class="page-item">
                     <a href="events.php?page=<?= $page - 1 ?>" class="page-link" aria-label="Previous">
                     <span aria-hidden="true">
                     <span class="lnr lnr-chevron-left"></span>
                     </span>
                     </a>
                  </li>
                  <?php } ?>
                  <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
                  <li class="page-item <?php if ($i == $page) echo 'active'; ?>">
                     <a class="page-link" href="events.php?page=<?= $i ?>"><?= $i ?></a>
                  </li>
                  <?php } ?>
                  <?php if ($page < $total_pages) { ?>
                  <li class="page-item">
                     <a href="events.php?page=<?= $page + 1 ?>" class="page-link" aria-label="Next">
                     <span aria-hidden="true">
                     <span class="lnr lnr-chevron-right"></span>
                     </span>
                     </a>
                  </li>
                  <?php } ?>
               </ul>
            </nav>
         </div>
         </div>   
      </section>
      <!-- End popular-courses Area -->         
      <!-- Start search-course Area -->
      <section class="search-course-area relative">
         <div class="overlay overlay-bg"></div>
         <div class="container">
            <div class="row justify-content-between align-items-center">
               <div class="col-lg-6 col-md-6 search-course-left">
                  <h1 class="text-white">
                     Get reduced fee <br>
                     during this Summer!
                  </h1>
                  <p>
                     inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.
                  </p>
                  <div class="row details-content">
                     <div class="col single-detials">
                        <span class="lnr lnr-graduation-hat"></span>
                        <a href="#">
                           <h4>Expert Instructors</h4>
                        </a>
                        <p>
                           Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                        </p>
                     </div>
                     <div class="col single-detials">
                        <span class="lnr lnr-license"></span>
                        <a href="#">
                           <h4>Certification</h4>
                        </a>
                        <p>
                           Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 search-course-right section-gap">
                  <form class="form-wrap" action="#">
                     <h4 class="text-white pb-20 text-center mb-30">Search for Available Course</h4>
                     <input type="text" class="form-control" name="name" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" >
                     <input type="phone" class="form-control" name="phone" placeholder="Your Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Phone Number'" >
                     <input type="email" class="form-control" name="email" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'" >
                     <div class="form-select" id="service-select">
                        <select>
                           <option datd-display="">Choose Course</option>
                           <option value="1">Course One</option>
                           <option value="2">Course Two</option>
                           <option value="3">Course Three</option>
                           <option value="4">Course Four</option>
                        </select>
                     </div>
                     <button class="primary-btn text-uppercase">Submit</button>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <!-- End search-course Area -->        
      <!-- Start upcoming-event Area -->
      <section class="upcoming-event-area section-gap">
         <div class="container">
            <div class="row d-flex justify-content-center">
               <div class="menu-content pb-70 col-lg-8">
                  <div class="title text-center">
                     <h1 class="mb-10">Upcoming Events of our Institute</h1>
                     <p>If you are a serious astronomy fanatic like a lot of us</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="active-upcoming-event-carusel">
                  <div class="single-carusel row align-items-center">
                     <div class="col-12 col-md-6 thumb">
                        <img class="img-fluid" src="img/e1.jpg" alt="">
                     </div>
                     <div class="detials col-12 col-md-6">
                        <p>25th February, 2018</p>
                        <a href="#">
                           <h4>The Universe Through
                              A Child S Eyes
                           </h4>
                        </a>
                        <p>
                           For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
                        </p>
                     </div>
                  </div>
                  <div class="single-carusel row align-items-center">
                     <div class="col-12 col-md-6 thumb">
                        <img class="img-fluid" src="img/e2.jpg" alt="">
                     </div>
                     <div class="detials col-12 col-md-6">
                        <p>25th February, 2018</p>
                        <a href="#">
                           <h4>The Universe Through
                              A Child S Eyes
                           </h4>
                        </a>
                        <p>
                           For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
                        </p>
                     </div>
                  </div>
                  <div class="single-carusel row align-items-center">
                     <div class="col-12 col-md-6 thumb">
                        <img class="img-fluid" src="img/e1.jpg" alt="">
                     </div>
                     <div class="detials col-12 col-md-6">
                        <p>25th February, 2018</p>
                        <a href="#">
                           <h4>The Universe Through
                              A Child S Eyes
                           </h4>
                        </a>
                        <p>
                           For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
                        </p>
                     </div>
                  </div>
                  <div class="single-carusel row align-items-center">
                     <div class="col-12 col-md-6 thumb">
                        <img class="img-fluid" src="img/e1.jpg" alt="">
                     </div>
                     <div class="detials col-12 col-md-6">
                        <p>25th February, 2018</p>
                        <a href="#">
                           <h4>The Universe Through
                              A Child S Eyes
                           </h4>
                        </a>
                        <p>
                           For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
                        </p>
                     </div>
                  </div>
                  <div class="single-carusel row align-items-center">
                     <div class="col-12 col-md-6 thumb">
                        <img class="img-fluid" src="img/e2.jpg" alt="">
                     </div>
                     <div class="detials col-12 col-md-6">
                        <p>25th February, 2018</p>
                        <a href="#">
                           <h4>The Universe Through
                              A Child S Eyes
                           </h4>
                        </a>
                        <p>
                           For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
                        </p>
                     </div>
                  </div>
                  <div class="single-carusel row align-items-center">
                     <div class="col-12 col-md-6 thumb">
                        <img class="img-fluid" src="img/e1.jpg" alt="">
                     </div>
                     <div class="detials col-12 col-md-6">
                        <p>25th February, 2018</p>
                        <a href="#">
                           <h4>The Universe Through
                              A Child S Eyes
                           </h4>
                        </a>
                        <p>
                           For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End upcoming-event Area -->          
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
      <script>
         $(document).ready(function(){
             var maxLength = 70;
         
             $(".read_more").each(function(){
                 var $this = $(this);
                 var content = $this.text().trim();
         
                 if (content.length > maxLength) {
                     var truncatedText = content.substring(0, maxLength);
                     var remainingText = content.substring(maxLength);
         
                     $this.empty().html(truncatedText);
                     $this.append(' <span class="remaining-text" style="display:none">' + remainingText + '</span>');
                     $this.append(' <a href="javascript:void(0);" class="read">..Read more</a>');
                 }
             });
         
             $(document).on("click", ".read", function() {
                 var $this = $(this);
                 var $parent = $this.closest(".read_more");
                 $parent.find(".remaining-text").toggle();
                 $this.toggleClass("expanded");
         
                 if ($this.hasClass("expanded")) {
                     $this.text("Read less");
                 } else {
                     $this.text("Read more");
                 }
             });
         });
         
      </script>   
   </body>
</html>
