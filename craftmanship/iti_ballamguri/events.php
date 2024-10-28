
<?php 
  include("include/header.php");
  $events = $crud->Read("events","1 order by `id` desc"); 
// $events = $crud->Read("photos","1"); 
?>
</body>

      <!-- start banner Area -->
      <section class="banner-area relative about-banner" id="home">
         <div class="overlay overlay-bg"></div>
         <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
               <div class="about-content col-lg-12">
                  <h1 class="text-white">
                     Events				
                  </h1>
                  <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="events.php"> Events</a></p>
               </div>
            </div>
         </div>
      </section>
      <!-- End banner Area -->
      <!-- Start events-list Area -->
      <section class="events-list-area section-gap event-page-lists">
         <div class="container" id="itemList">
            <div class="row align-items-center" style="display: flex ;justify-content: center ;">
               <?php 
                  if ($events) {
                     foreach ($events as $event){                 
               ?>
               <div class="col-lg-6 pb-30 paginationItems">
                  <div class="single-carusel row align-items-center">
                     <div class="col-12 col-md-6 thumb">
                        <img class="img-fluid" src="admin/<?php echo $event['image'] ;?>" alt=""  style="height: 30vh;">
                     </div>
                     <div class="detials col-12 col-md-6">
                        <p><?php echo $event['date_uploaded'] ;?></p>
                        <a href="event-details.php?id=<?php echo base64_encode($event['id']) ;?>">
                           <h4 class="read_more"><?php echo $event['head'] ;?></h4>
                        </a>
                        <p class="read_more" style="text-align:justify">
                           <?php 
                             $desc=strip_tags($event['description']); 
                             if(strlen($desc)>150){
                              echo substr($desc,0,150).'<a href="event-details.php?id='.$event['id'].'" class="text-danger">  read more ...</a>';                              
                             }else{
                              echo $desc;
                             }
                           ?>
                        </p>
                     </div>
                  </div>
               </div>
               <?php 
                    }
                  }else{
                     for($i=0;$i<5;$i++){
               ?>
               <div class="col-lg-6 pb-30">
                  <div class="single-carusel row align-items-center">
                     <div class="col-12 col-md-6 thumb">
                        <img class="img-fluid" alt="" style="height: 30vh;width: 35vw;border: 1px solid rgb(190, 156, 156);">
                     </div>
                     <div class="detials col-12 col-md-6">
                        <p>uploaded date</p>
                        <a>
                           <h4 class="read_more">header</h4>
                        </a>
                        <p class="read_more">
                           description ....
                        </p>
                     </div>
                  </div>
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
           if($events){
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


      


      <!-- End events-list Area -->
      
    	<!-- Start cta-two Area -->
       <?php include("include/query.php");?>
      <!-- End cta-two Area -->						    			

      <!-- start footer Area -->		
      <?php include("include/footer.php");?>
