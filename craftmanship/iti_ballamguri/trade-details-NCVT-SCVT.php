
<?php 
include("include/header.php") ;

    // Function to check if a string is a valid Base64 encoded string
    function is_base64($str) {
      // Check if the string is base64 encoded
      return (bool) preg_match('/^[a-zA-Z0-9\/\r\n+]*={0,2}$/', $str);
      }
      
      if(isset($_GET['id'])){
          if(is_base64($_GET['id'])){
              $id=base64_decode($_GET['id']);
              if(is_numeric($id)){
                $readtrades = $crud->Read("trades","`id`='$id'");
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
                     Popular Trades     
                  </h1>
                  <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="readtrades.php">trade details</a></p>
               </div>
            </div>
         </div>
      </section>
      <!-- End banner Area -->   
      <?php 
         if($readtrades){
           $img=$readtrades[0]['image'];
           $head=$readtrades[0]['trade_name'];
           $eligibility=$readtrades[0]['eligibility'];
           $description=strip_tags($readtrades[0]['description']);
           
           $duration=$readtrades[0]['duration'];
         
          ?>
      <!-- Start course-details Area -->
      <section class="course-details-area pt-120">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 left-contents">
                  <div class="main-image">
                     <img class="img-fluid" style="height:460px;width:650px;" src="admin/<?php echo $img;?>" alt="">
                  </div>
                  <div class="jq-tab-wrapper" id="horizontalTab">
                     <div class="jq-tab-menu">
                        <div class="jq-tab-title active" data-tab="1">Description</div>
                        <!-- <div class="jq-tab-title" data-tab="2">Eligibilty</div> -->
                        <div class="jq-tab-title" data-tab="3">Admission Criteria</div>
                        
                     </div>
                     <div class="jq-tab-content-wrapper">
                        <div class="jq-tab-content active" data-tab="1">
                           <?php echo $description;?>
                        </div>
                        
                     </div>
                    
                     <div class="jq-tab-content-wrapper">
                        <div class="jq-tab-content " data-tab="3">
                           <?php echo $eligibility;?>
                        </div>
                        
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 right-contents">
                  <ul>
                     <li>
                        <a class="justify-content-between d-flex" href="#">
                           <p>Course name </p>
                           <span><?php echo $head;?></span>
                        </a>
                     </li>
                     <li>
                        <a class="justify-content-between d-flex" href="#">
                           <p>Duration </p>
                           <span><?php echo $duration;?></span>
                        </a>
                     </li>
                     
                  </ul>
                  <a href="SCVT-trade-details.php" class="primary-btn text-uppercase">View Details</a>
               </div>
            </div>
         </div>
      </section>
      <!-- End course-details Area -->
      <?php 
        }else{
      ?>
      <section class="course-details-area pt-120">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 left-contents">
                  <div class="main-image">
                  <img class="img-fluid" src="" alt="" style="height: 200px;border: 1px solid red;width: 100vw;">
                  </div>
                  <div class="jq-tab-wrapper" id="horizontalTab">
                     <div class="jq-tab-menu">
                        <div class="jq-tab-title active" data-tab="1">Description</div>
                        <!-- <div class="jq-tab-title" data-tab="2">Eligibilty</div> -->
                        <div class="jq-tab-title" data-tab="3">Admission Criteria</div>
                        
                     </div>
                     <div class="jq-tab-content-wrapper">
                        <div class="jq-tab-content active" data-tab="1">
                           Description for this trade .
                        </div>
                        
                     </div>
                    
                     <div class="jq-tab-content-wrapper">
                        <div class="jq-tab-content " data-tab="3">
                           Eligibility of this trade .
                        </div>
                        
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 right-contents">
                  <ul>
                     <li>
                        <a class="justify-content-between d-flex" href="#">
                           <p>Course name </p>
                           <span>course's name</span>
                        </a>
                     </li>
                     <li>
                        <a class="justify-content-between d-flex" href="#">
                           <p>Duration </p>
                           <span>duration</span>
                        </a>
                     </li>
                     
                  </ul>
                 
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
