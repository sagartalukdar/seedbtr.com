<?php 
include("include/header.php") ;
if (isset($_GET['scheme'])) {
   $schemes=$_GET['scheme'];
    $readTrades = $crud->Read("trades","`scheme`='$schemes' group by `trade_name` order by `id` desc");
   }
?>
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
<!-- Start popular-course2 Area -->
<section class="popular-course-area section-gap">
   <div class="container">
      <div class="row d-flex justify-content-center">
         <div class="menu-content pb-40 col-lg-8">
            <div class="title text-center">
               <h1 class="mb-10" style="text-align: center;"> Schemes running in the Institute (CTS and MES etc. under NCVT)</h1>               
            </div>  
               <?php
               if(!$readTrades){
                     echo '<h4 class="text-danger text-center mt-30">No trades available for this scheme.</h4>';
                  }
               ?>         
         </div>
      </div>
      <div class="row">
         <div class="active-popular-carusel" style="display: flex ;justify-content: center ;">
               <?php 
               if ($readTrades) {
                  $n=0;
                  foreach ($readTrades as $trades)
                  {                                    
               ?>
               <div class="single-popular-carusel">
                  <div class="thumb-wrap relative">
                     <div class="thumb relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid"style="height: 200px" src="admin/<?php echo $trades['image'] ;?>" alt="">
                     </div>
                     <div class="meta d-flex justify-content-between">
                        <h4><?php echo $trades['duration'] ;?></h4>
                     </div>
                  </div>
                  <div class="details">
                        <a href="trade-details.php?id=<?php echo base64_encode($trades['id']) ;?>">
                           <h4>
                              <?php echo $trades['trade_name'] ;?>
                           </h4>
                        </a>
                        <p class="read_more">
                           <?php echo $trades['description'] ;?>                            
                        </p>
                  </div>
               </div>
            
            <?php 
               }
               }else{                 
                  for($i=0;$i<4;$i++){
            ?>
               <div class="single-popular-carusel p-3">
                  <div class="thumb-wrap relative">
                     <div class="thumb relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid"style="height: 200px" src="" alt="">
                     </div>
                     <div class="meta d-flex justify-content-between">
                        <h6 class="text-success">duration</h6>
                     </div>
                  </div>
                  <div class="details">
                        <a>
                           <h4>
                              trade name
                           </h4>
                        </a>
                        <p class="read_more">
                           trade discription .....                     
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
<!-- End popular-course2 Area -->

    	<!-- Start cta-two Area -->
       <?php include("include/query.php");?>
      <!-- End cta-two Area -->						    			

      <!-- start footer Area -->		
      <?php include("include/footer.php");?>
