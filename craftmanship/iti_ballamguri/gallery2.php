<?php include("header.php") ?>

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
   <div class="container">
      <div class="title text-center">
         <h1 class="mb-10">Photo Gallery </h1>
      </div>
      <div class="row">
         <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 30px">
            <div align="center">
               <button class="btn btn-default filter-button" data-filter="all">All</button>
               <button class="btn btn-default filter-button" data-filter="fitter">Fitter</button>
               <button class="btn btn-default filter-button" data-filter="pump">Pump Operator</button>
               <button class="btn btn-default filter-button" data-filter="electrician">electrician</button>
            </div>
         </div>
         <?php
            if ($read2) {
                foreach ($read2 as $gallery) {
                    $trade = $gallery['trade'];
            
                    if ($trade == "fitter") {
                        $trade = "fitter";
                    } elseif ($trade == "pump") {
                        $trade = "pump";
                    } elseif ($trade == "electrician") {
                        $trade = "electrician";
                    }
                    ?>
         <br/>
         <div class="col-lg-4 filter <?php echo $trade; ?>">
            <a href="../admin/<?php echo $gallery['image'] ;?>" class="img-gal">
               <div class="single-imgs relative" >
                  <div class="overlay overlay-bg">
                     <style type="text/css">
                        .caption-container{
                           text-align: center;
                           color: white;
                           margin-top: auto;

                        }
                     </style>
                     <div class="caption-container">
                        <h3><?php echo $gallery['description'] ;?> </h3> 
                        <!-- <p>DescriptionDescriptio nDescriptionDescript ionDescriptionDe scription</p> -->
                     </div>
                     
                  </div>
                  <div class="relative">           
                     <img src="../admin/<?php echo $gallery['image'] ;?>" class="img-responsive" style="width: 350px; height: 200px; border-radius: 15px">    
                  </div>
               </div>
            </a>
         </div>
         <?php }
            }
            ?>
      </div>
   </div>
</section>
<!-- End gallery Area -->
<!-- Start cta-two Area -->
<?php include("query.php");?>
<!-- End cta-two Area -->                             
<!-- start footer Area --> 
<script type="text/javascript">
   $(document).ready(function(){
   
   $(".filter-button").click(function(){
   var value = $(this).attr('data-filter');
   
   if(value == "all")
   {
   
   $('.filter').show('1000');
   }
   else
   {

   $(".filter").not('.'+value).hide('3000');
   $('.filter').filter('.'+value).show('3000');
   
   }
   });
   
   if ($(".filter-button").removeClass("active")) {
   $(this).removeClass("active");
   }
   $(this).addClass("active");
   
   });
</script>   

<?php include("footer.php");?>
  
