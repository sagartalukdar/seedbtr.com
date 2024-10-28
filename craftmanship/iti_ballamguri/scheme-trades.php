<?php 
include("include/header.php") ;
$readScheme = $crud->Read("tradescheme","1 group by `scheme` order by `id` desc");
$readNCVT = $crud->Read("trades", "`certificate`='NCVT(National Council for Vocational Training)' and `status`=1 group by `trade_name` order by `id` desc");
$readSCVT = $crud->Read("trades", "`certificate`='SCVT(State Council for Vocational Training)' and `status`=1 group by `trade_name` order by `id` desc");
?>

<style>
   @import url('https://fonts.googleapis.com/css2?family=Acme&display=swap');

   .acme-regular {
      font-family: "Acme", sans-serif;
      font-weight: 400;
      font-style: normal;
   }
</style>

<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">  
   <div class="overlay overlay-bg"></div>
   <div class="container">          
      <div class="row d-flex align-items-center justify-content-center">
         <div class="about-content col-lg-12">
            <h1 class="text-white">
               Schemes & Trades           
            </h1> 
            <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="gallery.php"> Schemes & Trades</a></p>
         </div>   
      </div>
   </div>
</section>
<!-- End banner Area -->   
   <style>
      .bgs::before{
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url('../../img/bbs.PNG');
        background-position: center;
        opacity: 0.5; /* Adjust the opacity as needed */
        z-index: 1; /* Place it behind the content */
      }      
      .bgs{
        position: relative;
        z-index: 2; /* Ensure the content is above the background image */
      }
   </style>
   <div class="gs">
      <!-- Start popular-course2 Area -->
            
      <section class="popular-course-area section-gap bgs" style="margin-bottom: -50px;">
         <div class="container">
            <div class="row d-flex justify-content-center">
               <div class="menu-content pb-40 col-lg-8">
                  <div class="title text-center">
                     <h1 class="mb-10 acme-regular">Schemes running in the Institute (CTS and MES etc. under NCVT)</h1>
                     
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="active-popular-carusel" style="display: flex;justify-content: center;">
                  <?php 
                     if($readScheme){
                     foreach($readScheme as $schemeKey){
                  ?>
                  
                  <div class="single-popular-carusel">
                     <div class="thumb-wrap relative">
                        <div class="thumb relative">
                           <div class="overlay overlay-bg"></div>
                           <img class="img-fluid scheme" src="admin/<?php echo $schemeKey['image'] ?>" alt="">
                        </div>
                        <div class="meta d-flex justify-content-between">
                           <p><span class="lnr lnr-users"></span>  <?php echo $schemeKey['total_seats'] ?> 
                        </div>
                     </div>
                     <div class="details">
                        <a href="trade-scheme-details.php?scheme=<?php echo $schemeKey['scheme'] ;?>">
                           <h4>
                              <?php echo $schemeKey['scheme'] ?>
                           </h4>
                        </a>
                        
                     </div>
                  </div>

                  <?php 
                     } 
                     }else{
                        for($i=0;$i<3;$i++){
                  ?>
                  <div class="single-popular-carusel">
                     <div class="thumb-wrap relative">
                        <div class="thumb relative">
                           <div class="overlay overlay-bg"></div>
                           <img class="img-fluid scheme" src="" alt="">
                        </div>
                        <div class="meta d-flex justify-content-between">
                           <p><span class="lnr lnr-users"></span>  total seats
                        </div>
                     </div>
                     <div class="details">
                        <a>
                           <h4>
                              name of scheme
                           </h4>
                        </a>
                        
                     </div>
                  </div>
                  <?php
                     }
                  }
                  ?>

               </div>
            </div>
         </div>
      </section>

      <!-- End popular-course2 Area -->


            
      <!-- Start popular-course Area -->
      <section class="popular-course-area section-gap bgs" style="margin-bottom: -50px;">
         <div class="container">
            <div class="row d-flex justify-content-center">
               <div class="menu-content pb-40 col-lg-8">
                  <div class="title text-center">
                     <h1 class="mb-10 acme-regular"> Trades Affiliated to National Council Vocational Training (NCVT)</h1>               
                  </div>
                  <div>
                     <?php
                     if(!$readNCVT){
                        echo '<h4 class="text-danger text-center mt-30" style="position: relative;z-index: 50;" >No trades available under NCVT.</h4>';
                     }
                     ?>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="active-popular-carusel" style="display: flex ;justify-content: center ;">
                  
                  <?php 
                     if($readNCVT){
                     foreach($readNCVT as $ncvtKey){
                  ?>
                  <div class="single-popular-carusel">
                     <div class="thumb-wrap relative">
                        <div class="thumb relative">
                           <div class="overlay overlay-bg"></div>
                           <img class="img-fluid tradeimg" src="admin/<?php echo $ncvtKey['image'] ;?>"  alt="">
                        </div>                
                     </div>
                     <div class="details">
                           <a href="trade-details-NCVT-SCVT.php?id=<?php echo base64_encode($ncvtKey['id']) ;?>">
                              <h4>
                              <?php echo $ncvtKey['trade_name'] ?>
                              </h4>
                           </a>
                           <p class="read_more">
                              <?php echo $ncvtKey['certificate'] ?>                            
                           </p>
                     </div>
                  </div>
                  
               <?php 
               }
               }else{
                  for($i=0;$i<4;$i++){
               ?>
                  <div class="single-popular-carusel">
                     <div class="thumb-wrap relative">
                        <div class="thumb relative">
                           <div class="overlay overlay-bg"></div>
                           <img class="img-fluid tradeimg" src=""  alt="">
                        </div>                
                     </div>
                     <div class="details">
                           <a>
                              <h4>
                              trade name
                              </h4>
                           </a>
                           <p class="read_more">
                              certificate                  
                           </p>
                     </div>
                  </div>
               <?php
                  }
               }
               ?>
                              
               </div>
            </div>
         </div>
      </section>
      <!-- End popular-course Area -->
      <!-- Start popular-course Area -->
      <section class="popular-course-area section-gap bgs">
         <div class="container">
            <div class="row d-flex justify-content-center">
               <div class="menu-content pb-40 col-lg-8">
                  <div class="title text-center">
                     <h1 class="mb-10 acme-regular"> Trades Affiliated to State Council Vocational Training (SCVT)</h1>               
                  </div>
                  <div>
                     <?php
                     if(!$readSCVT){
                        echo '<h4 class="text-danger text-center mt-30" style="position: relative;z-index: 50;">No trades available under SCVT.</h4>';
                     }
                     ?>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="active-popular-carusel" style="display: flex ;justify-content: center ;">
                  
                  <?php
                     if($readSCVT){
                     foreach($readSCVT as $scvtKey){
                  ?>
                  <div class="single-popular-carusel">
                     <div class="thumb-wrap relative">
                        <div class="thumb relative">
                           <div class="overlay overlay-bg"></div>
                           <img class="img-fluid tradeimg" src="admin/<?php echo $scvtKey['image'] ;?>"  alt="">
                        </div>                
                     </div>
                     <div class="details">
                           <a href="trade-details-NCVT-SCVT.php?id=<?php echo base64_encode($scvtKey['id']) ;?>">
                              <h4>
                              <?php echo $scvtKey['trade_name'] ?>
                              </h4>
                           </a>
                           <p class="read_more">
                              <?php echo $scvtKey['certificate'] ?>                            
                           </p>
                        </div>
                     </div>
                  
               <?php 
                  }
               }else{
                  for($i=0;$i<4;$i++){
               ?>
                  <div class="single-popular-carusel">
                     <div class="thumb-wrap relative">
                        <div class="thumb relative">
                           <div class="overlay overlay-bg"></div>
                           <img class="img-fluid tradeimg" src=""  alt="">
                        </div>                
                     </div>
                     <div class="details">
                           <a>
                              <h4>
                              trade name
                              </h4>
                           </a>
                           <p class="read_more">
                              certificate                  
                           </p>
                     </div>
                  </div>
               <?php
                  }
               }
               ?>
               
                  
               </div>
            </div>
         </div>
      </section>
      <!-- End popular-course Area -->
   </div>  

    <div>
      	<!-- Start cta-two Area -->
         <?php include("include/query.php");?>
         <!-- End cta-two Area -->				
    </div>		    			

    <div>
        <!-- start footer Area -->		
        <?php include("include/footer.php");?>
    </div>
