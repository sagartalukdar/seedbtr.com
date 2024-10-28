<?php 
include("include/header.php") ;
$sliders=$crud->Read("slider","1 order by `id` desc");
$slidersEvent = $crud->Read("events","1 order by id desc limit 4");
$readTrades=$crud->Read("trades","`status`=1 order by `id` desc limit 4");
$news = $crud->Read("newsupdates","1 order by `id` desc limit 3");
$slidersInstructor = $crud->Read("faculty_details","1 limit 3"); 
$tradeSchemes=$crud->Read("tradescheme","1 group by `scheme` order by `id` desc")
// $readTrades=$crud->Read("photos","1");
?>

<?php
   if ($sliders) {
       $n = 0;
       ?>

<!-- start banner Area -->
<section class="banner-area relative" id="home">
   <div class="container-fluid">
      <div class="overlay overlay-bg">
         <!-- home-carousel -->
         <div id="demo" class="carousel slide banner-area mobile_gap" data-ride="carousel">
            <ul class="carousel-indicators" style="justify-content: right;">
               <?php foreach 
                  ($sliders as $key => $slider) 
                  { 
                  	?>
               <li data-target="#demo" data-slide-to="<?php echo $key; ?>" <?php if ($key == 0) echo 'class="active"'; ?>></li>
               <?php } ?>
            </ul>
            <div class="carousel-inner">
               <?php foreach ($sliders as $key => $slider) { ?>
               <div class="carousel-item <?php if ($key == 0) echo 'active'; ?>">
                  <img src="admin/<?php echo $slider['image']; ?>" alt="Slide Image" class="carousel_home">
                  <div class="carousel-caption">
                  <!-- <div class="carousel-text"> -->
                     <h1 class="mb-10 txt-color"><?php echo $slider['head']; ?></h1>
                     <p class="txt-color"><?php echo $slider['title']; ?></p>
                  </div>
               </div>
               <?php } ?>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            </a>
         </div>
         <!-- home carousel end -->
      </div>
   </div>
   <div class="container">
      <div class="row d-flex align-items-center justify-content-between bannergap">
         <div class="banner-content col-lg-9 col-md-12">
            <h1 class="text-uppercase">
               	
            </h1>
            <p class="pt-10 pb-10">
              
            </p>
            <a href="#" class="primary-btn text-uppercase"></a>
         </div>
      </div>
   </div>
</section>
<!-- End banner Area -->
<?php 
  }else{
?>
<section class="banner-area relative" id="home">
   <div class="container-fluid">
      <div class="overlay overlay-bg">
         <!-- home-carousel -->
         <div id="demo" class="carousel slide banner-area mobile_gap" data-ride="carousel">
            <ul class="carousel-indicators" style="justify-content: right;">
               <?php for($i=0;$i<3;$i++) 
                  { 
                  	?>
               <li data-target="#demo" data-slide-to="<?php echo $i; ?>" <?php if ($i == 0) echo 'class="active"'; ?>></li>
               <?php } ?>
            </ul>
            <div class="carousel-inner" style="background-color: rgb(187, 207, 207);height: 100vh;">
               <?php for($i=0;$i<3;$i++) { ?>
               <div class="carousel-item <?php if ($i == 0) echo 'active'; ?>">
                  <img src="" alt="Slide Image" class="carousel_home">
                  <div class="carousel-caption">
                  <!-- <div class="carousel-text"> -->
                     <h1 class="mb-10 txt-color">Head text</h1>
                     <p class="txt-color">title</p>
                  </div>
               </div>
               <?php } ?>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            </a>
         </div>
         <!-- home carousel end -->
      </div>
   </div>
   <div class="container">
      <div class="row d-flex align-items-center justify-content-between bannergap">
         <div class="banner-content col-lg-9 col-md-12">
            <h1 class="text-uppercase">
               	
            </h1>
            <p class="pt-10 pb-10">
              
            </p>
            <a href="#" class="primary-btn text-uppercase"></a>
         </div>
      </div>
   </div>
</section>
<?php
  }
?>

<!-- Start feature Area -->
<section class="feature-area">
   <div class="container">
      <div class="row">
         <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="single-feature">
               <a href="scheme-trades.php">
                  <div class="title">
                     <h4>Schemes & Trades</h4>
                  </div>
               </a>	
               <div class="desc-wrap">
                  
                  <a href="scheme-trades.php">See more</a>									
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="single-feature">
               <div class="title">
                  <h4>Admissions</h4>
               </div>
               <div class="desc-wrap">
                  
                  <a href="#0">See more</a>									
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="single-feature">
               <div class="title">
                  <h4>Notifications</h4>
               </div>
               <div class="desc-wrap">
                  
                  <a href="#0">See more</a>									
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End feature Area -->

<!--start news  -->
<head>
   <style>
      .news{width: 160px; border-top-right-radius: 0px;}
      .updates{width: 330px; border-top-right-radius: 25px; margin: 0 0 0 15px;}
      .news-scroll a{text-decoration: none; scroll-behavior: smooth; font-weight: 500;}
      .dot{height: 6px;width: 6px;margin-left: 3px;margin-right: 3px;margin-top: 2px !important;background-color: rgb(207,23,23);border-radius: 50%;display: inline-block}
   </style>
</head>
<div class="container-fluid pb-30">
   <div class="row">
      <div class="col-md-12">
         <div class="d-flex justify-content-between align-items-center breaking-news bg-white">
            <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-danger py-2 text-white px-1 updates">
               <span class="d-flex align-items-center">&nbsp;Latest Updates</span>
            </div>
            <marquee class="news-scroll " behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
            <?php 
               if ($news) {
               $n=0;
               foreach ($news as $latest)
                {               
               ?>
               <span class="dot"></span>
               <a href="#0">
                  <?php 
                    $update=strip_tags($latest['description']);
                     echo $latest['news'].": ".$update ; 
                  ?> 
               </a>             
            <?php
                }
              }else{
            ?>
              <span class="dot"></span>
              <span class="text-danger">new updates for recent news. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; new updates for recent news. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; new updates for recent news. </span> 
            <?php   
              }
            ?>
            </marquee>
         </div>
      </div>
   </div>
</div>
<!-- end news -->
<!--start vertical news  -->

<div class="container-fluid">
   <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 sidebar-widgets">
         <div class="holder" style="box-shadow: 0px 0px 13px rgb(197, 183, 209); border-radius: 16px 0px 16px 0px; padding: 20px; width: 350px;display: flex;margin: auto;">
            
            <ul id="ticker01" style="padding: 0px 30px;">
               <?php
                  $readNotice=$crud->Read("Notice","1 order by `id` desc limit 5");
                  if($readNotice){
                     foreach($readNotice as $notice){
               ?>               
                 <li>
                  <a><span class="dot"></span><span style="font-weight: bold;"><?=  $notice['notice'].': ' ?></span> <?= strip_tags($notice['description']) ?> </a>
                  <span class="text-success"><?= $notice['date_uploaded']; ?></span>
                </li>
               <?php
                     }
                  }else{
                     for($i=0;$i<4;$i++){
               ?>
                <li>
                  <a><span class="dot"></span><span style="font-weight: bold;">Notice Head: </span> <?= 'Notice description' ?> </a>
                  <span class="text-success"><?= 'date_uploaded' ?></span>
                </li>
               <?php
                     }
                  }
               ?>                     
            </ul>
            
         </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 sidebar-widgets">
         <div class="widget-wrap">
            <div class="single-sidebar-widget popular-post-widget">
               <h3 class="mb-30 headcard">Faculty(Technical Staff)</h3>
               <div class="popular-post-list">
                  <?php 
                     if($slidersInstructor){
                        foreach($slidersInstructor as $slidersKey){
                           ?>
                           <div class="single-post-list d-flex flex-row align-items-center">
                              <div class="thumb">
                                 <img class="img-fluid faculty" src="admin/<?php echo $slidersKey['image'] ?>" alt="">
                              </div>
                              <div class="details">
                                 <a href="#0">
                                    <h6><?php echo $slidersKey['full_name'] ?></h6>
                                 </a>
                                 <p><?php echo $slidersKey['designation'] ?> </p>
                              </div>
                           </div>
                           <?php 
                        }
                     }else{
                        for($i=0;$i<3;$i++){
                     ?>
                     <div class="single-post-list d-flex flex-row align-items-center">
                        <div class="thumb">
                           <img class="img-fluid faculty" src="" alt="" style="height:63px; width:70px;">
                        </div>
                        <div class="details">
                           <a href="#0">
                              <h6>full name of the instructor</h6>
                           </a>
                           <p>instructor's designation</p>
                        </div>
                     </div>
                     <?php
                        }
                     }
                  ?>
                  
                  <?php
                    if($slidersInstructor){
                     echo '<a href="instructor.php" class="genric-btn link">See more..</a>';
                    }else{
                     echo '<a class="genric-btn link"></a>';
                    }
                  ?>               
                                 
               </div>
            </div>
            
         </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 sidebar-widgets">
         <div class="widget-wrap">
            
            <div class="single-sidebar-widget post-category-widget">
               <h3 class="mb-30 headcard">Schemes</h3>
               <ul class="cat-list">
                  <?php
                     if($tradeSchemes){
                        foreach($tradeSchemes as $scheme){
                  ?>
                  <li>
                     <a href="scheme-trades.php" class="d-flex justify-content-between">
                        <p><?= $scheme['scheme']; ?></p>
                        <p><?= $scheme['total_seats']; ?></p>
                     </a>
                  </li>   
                  <?php
                        }
                     }else{
                        for($i=0;$i<4;$i++){
                  ?>
                  <li>
                     <a href="#0" class="d-flex justify-content-between">
                        <p>Distinct Scheme name</p>
                        <p>total seats</p>
                     </a>
                  </li>   
                  <?php
                        }
                     }
                  ?>                                                 
               </ul>
               <?php
                  if($tradeSchemes){
                     echo '<a href="scheme-trades.php" class="genric-btn link">See more..</a>';
                  }else{
                     echo '<a class="genric-btn link"></a>';
                  }
               ?>             
             
            </div>
         </div>
      </div>
   </div>
</div>

<!-- end vertical news -->
<!-- Start popular-course Area -->
<section class="popular-course-area section-gap">
   <div class="container">
      <div class="row d-flex justify-content-center">
         <div class="menu-content pb-70 col-lg-8">
            <div class="title text-center">
               <h1 class="mb-10">Trades</h1>
               <!-- <p>There is a moment in the life of any aspiring.</p> -->
            </div>
         </div>
      </div>
              
      <div class="row">
         <div class="active-popular-carusel" style="display: flex !important;justify-content: center !important;">
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
                  <div class="meta d-flex justify-content-between" style="padding-bottom: 10px;">
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
                        <?php echo strip_tags($trades['description']) ;?>                            
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
                     <img class="img-fluid"style="width: 252px;height: 200px" src="" alt="">
                  </div>
                  <div class="meta d-flex justify-content-between">
                     <h6 class="text-success"> duration</h6>
                  </div>
               </div>
               <div class="details">
                     <a href="#0">
                        <h4>
                          trade name
                        </h4>
                     </a>
                     <p class="read_more">
                        description of this trade ...                 
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
<!-- Start search-course Area -->

<!-- End search-course Area -->
<!-- Start upcoming-event Area -->
<section class="upcoming-event-area section-gap">
   <div class="container">
      <div class="row d-flex justify-content-center">
         <div class="menu-content pb-70 col-lg-8">
            <div class="title text-center">
               <h1 class="mb-10">Events</h1>
               <!-- <p>If you are a serious astronomy fanatic like a lot of us</p> -->
            </div>
         </div>
      </div>
      <div class="row">            
         <div class="active-upcoming-event-carusel" style="display: flex ;justify-content: center ;">
            <?php 
                  if ($slidersEvent) {
                   $n=0;
                   foreach ($slidersEvent as $events)
                  {
                 
                  ?>
            <div class="single-carusel row align-items-center">
                   
               <div class="col-12 col-md-6 thumb">
                  <img class="img-fluid" src="admin/<?php echo $events['image'] ;?>" alt="" style="height: 200px;" >
               </div>
               <div class="detials col-12 col-md-6">
                  <p><?php echo $events['date_uploaded'] ;?></p>
                  <a href="event-details.php?id=<?php echo base64_encode($events['id']) ;?>">
                     <h4 class="read_more"><?php echo $events['head'] ;?></h4>
                  </a>
                  <p class="read_more">
                           <?php echo strip_tags($events['description']) ;?>
                  </p>
               </div>
            
            </div>
            <?php 
               }
             }else{
               for($i=0;$i<3;$i++){
            ?>
               <div class="single-carusel row align-items-center">
                   
                   <div class="col-12 col-md-6 thumb" style="border:1px solid red; height:20vh">
                      <img class="img-fluid" src="" alt="">
                   </div>
                   <div class="detials col-12 col-md-6">
                      <p>uploaded date</p>
                      <a href="#0">
                         <h4 class="read_more">head text</h4>
                      </a>
                      <p class="read_more">
                          description for this event ...
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
<div class="col-lg-12 col-md-12 col-sm-12 sidebar-widgets">
         <div class="widget-wrap">
            <div class="single-sidebar-widget popular-post-widget">
               <h3 class="mb-30 headcard">External Links</h3>
               <div class="popular-post-list row exlinkcentre">
                  <div class="single-post-list d-flex flex-row align-items-center exlink">
                     <div class="">
                        <img class="exlinksize" src="img/msme.png" alt="">
                     <div class="details exlinktop">
                        <a href="#">
                           <h6>Ministry Of MSME</h6>
                        </a>
                        <a href="https://msme.gov.in/" target="_blank" class="genric-btn success-border medium">Click<span class="lnr lnr-arrow-right"></span></a> 
                     </div>
                  </div> </div>
                  
                  <div class="single-post-list d-flex flex-row align-items-center exlink ">
                     <div class="">
                        <img class="exlinksize" src="img/edu.png" alt="">
                     <div class="details exlinktop">
                        <a href="#">
                           <h6>Ministry of Education</h6>
                        </a>
                        <a href="https://www.education.gov.in/" target="_blank" class="genric-btn success-border medium">Click<span class="lnr lnr-arrow-right"></span></a> 
                     </div>
                  </div> </div>
                  <div class="single-post-list d-flex flex-row align-items-center exlink ">
                     <div class="">
                        <img class="exlinksize" src="img/assam.jpeg" alt="">
                     <div class="details exlinktop">
                        <a href="#">
                           <h6>Govt of Assam</h6>
                        </a>
                        <a href="https://assam.gov.in/" target="_blank" class="genric-btn success-border medium">Click<span class="lnr lnr-arrow-right"></span></a> 
                     </div>
                  </div> </div>

                 
                 
                  <div class="single-post-list d-flex flex-row align-items-center exlink">
                     <div class="">
                        <img class="exlinksize" src="img/btr.png" alt="">
                     
                     <div class="details exlinktop">
                        <a href="#">
                           <h6>BTR government</h6>
                        </a>
                        <a href="https://bodoland.gov.in/" target="_blank" class="genric-btn success-border medium">Click<span class="lnr lnr-arrow-right"></span></a>                 
                     </div>  
                  </div> </div>

                  <div class="single-post-list d-flex flex-row align-items-center exlink">
                     <div class="">
                        <img class="exlinksize" src="img/goi.jpg" alt="">
                     
                     <div class="details exlinktop">
                        <a href="#">
                           <h6>Govt of India</h6>
                        </a>
                        <a href="https://assam.gov.in/" target="_blank" class="genric-btn success-border medium">Click<span class="lnr lnr-arrow-right"></span></a>                 
                     </div>  
                  </div> </div>

                  
               </div>
            </div>
            <!--  -->
         </div>
      </div>
<!-- End upcoming-event Area -->
 			
<!-- start footer Area -->		
<?php include("include/footer.php");?>


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
