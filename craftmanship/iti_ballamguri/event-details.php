
<?php 
include("include/header.php");

       // Function to check if a string is a valid Base64 encoded string
       function is_base64($str) {
         // Check if the string is base64 encoded
         return (bool) preg_match('/^[a-zA-Z0-9\/\r\n+]*={0,2}$/', $str);
         }
         
         if(isset($_GET['id'])){
             if(is_base64($_GET['id'])){
                 $id=base64_decode($_GET['id']);
                 if(is_numeric($id)){
                    $events = $crud->Read("events","`id`='$id'"); 
                 }else{
                     header("Location: ../error.php");
                     exit;
                 }
             }else{
                 header("Location: ../error.php");
                 exit;
             }
             }else{
             header("Location: ../error.php");
             exit;
         }

   ?>
      <!-- start banner Area -->
      <section class="banner-area relative about-banner" id="home">
         <div class="overlay overlay-bg"></div>
         <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
               <div class="about-content col-lg-12">
                  <h1 class="text-white">
                     Event Details			
                  </h1>
                  <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="event-details.php"> Event Details</a></p>
               </div>
            </div>
         </div>
      </section>
      <!-- End banner Area -->
      <?php 
         if($events){
           $img=$events[0]['image'];
           $head=$events[0]['head'];
           $title=$events[0]['title'];
           $description=$events[0]['description'];
           $venue=$events[0]['venue'];
           $uploadDate=$events[0]['date_uploaded'];        
          ?>	
      <!-- Start event-details Area -->
      <section class="event-details-area section-gap">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 event-details-left">
                  <div class="main-img">
                     <img class="img-fluid" src="admin/<?php echo $img;?>" alt="" style="height: 500px;" width="100%" >
                  </div>
                  <div class="details-content">
                     <a href="#">
                        <h4><?php echo $head;?></h4>
                     </a>
                     <p>
                        <?php echo $description;?>									
                     </p>
                  </div>
              
               </div>
               <div class="col-lg-4 event-details-right">
                  <div class="single-event-details">
                     <h4>Details</h4>
                     <ul class="mt-10">
                        <li class="justify-content-between d-flex">
                           <span>Uploaded date</span>
                           <span><?php echo $uploadDate;?></span>
                        </li>
                        <li class="justify-content-between d-flex">
                           <span>Venue</span>
                           <span><?php echo $venue;?></span>
                        </li>
                     </ul>
                  </div>
                 									
               </div>
            </div>
         </div>
      </section>
      <!-- End event-details Area -->
      <?php }
         else{
      ?>
      <section class="event-details-area section-gap">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 event-details-left">
                  <div class="main-img">
                     <img class="img-fluid" src="" height="290px" width="300px" style="border: 1px solid green;">
                  </div>
                  <div class="details-content">
                     <a>
                        <h4>Event Header</h4>
                     </a>
                     <p>
                        description of this event .							
                     </p>
                  </div>
              
               </div>
               <div class="col-lg-4 event-details-right">
                  <div class="single-event-details">
                     <h4>Details</h4>
                     <ul class="mt-10">
                        <li class="justify-content-between d-flex">
                           <span>Event date</span>
                           <span>uploaded date</span>
                        </li>
                        <li class="justify-content-between d-flex">
                           <span>Venue</span>
                           <span>venue of event</span>
                        </li>
                     </ul>
                  </div>
                 									
               </div>
            </div>
         </div>
      </section>
      <?php
         }
      ?>
    	<!-- Start cta-two Area -->
       <?php include("include/query.php");?>
      <!-- End cta-two Area -->						    			

      <!-- start footer Area -->		
      <?php include("include/footer.php");?>