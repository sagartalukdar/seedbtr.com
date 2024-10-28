<?php 
include("include/header.php");
$photos = $crud->Read("photos","1 order by `id` desc");
?>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
   <div class="overlay overlay-bg"></div>
   <div class="container">
      <div class="row d-flex align-items-center justify-content-center">
         <div class="about-content col-lg-12">
            <h1 class="text-white">
               Gallery           
            </h1>
            <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="gallery.php"> Gallery</a></p>
         </div>
      </div>
   </div>
</section>
<!-- End banner Area -->   
<!-- Start gallery Area -->
<section class="gallery-area section-gap">
   <div class="container" id="itemList">
      <div class="title text-center">
         <h1 class="mb-10">Photo Gallery </h1>
      </div>
      <div class="row">       
         <?php
             if ($photos) {
                foreach ($photos as $gallery) {                  
         ?>
         <br/>
         <div class="col-lg-4 filter <?php echo $trade; ?>  paginationItems ">
            <a href="admin/<?php echo $gallery['image'] ;?>" class="img-gal">
               <div class="single-imgs relative" >
                  <div class="overlay overlay-bg">
                     <style type="text/css">
                        .caption-container{
                           text-align: center;
                           color: white;
                           margin-top: auto;
                        }
                     </style>
                    
                  </div>
                  <div class="relative">           
                     <img src="admin/<?php echo $gallery['image'] ;?>" class="img-responsive" style="width: 350px; height: 200px; border-radius: 15px">    
                  </div>
               </div>
            </a>
         </div>
         <?php }
            }else{
             for($i=0;$i<5;$i++){
         ?>
         <div class="col-lg-4 filter">
            <a class="img-gal">
               <div class="single-imgs relative" >
                  <div class="overlay overlay-bg">
                     <style type="text/css">
                        .caption-container{
                           text-align: center;
                           color: white;
                           margin-top: auto;
                        }
                     </style>                    
                  </div>
                  <div class="relative">           
                     <img src="" class="img-responsive" style="width: 350px; height: 200px; border-radius: 15px; border:1px solid black;">    
                  </div>
               </div>
            </a>
         </div>
         <?php
             }  
            }
         ?>
      </div>
   </div>
</section>


          <!-- This is a necessary div for pagination  -->
          <!-- this is pagination buttons will genarate by javascript -->
          <?php
           if($photos){
          ?>
           <div class="container text-center mt-0">
            <div id="pagination" class="pagination"></div>
          </div>
          <?php
           }
          ?>
         
          <!-- here need to link paginationStyle.css to design pagination buttons -->

            <!-- pagintion script start -->
            <script src="../../assets/js/paginationScript.js"></script>
            <!-- pagintion script end -->



<!-- End gallery Area -->
    	<!-- Start cta-two Area -->
       <?php include("include/query.php");?>
      <!-- End cta-two Area -->						    			

      <!-- start footer Area -->		
      <?php include("include/footer.php");?>
  
