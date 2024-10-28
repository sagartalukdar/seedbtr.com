	

<?php 
include("include/header.php");
$AboutUS = $crud->Read("about_us","1 order by `id` desc");
?>
			  
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								About Us				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="about.php"> About Us</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
					
				<?php 
                if ($AboutUS) {
                    $n=0;
					$aboutus=$AboutUS[0];				
                ?>   
			
			<section class="info-area pb-80 container mt-30">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-lg-6 no-padding info-area-left">
							<img class="img-fluid" src="admin/<?php echo $aboutus['image'] ;?>" alt="">
						</div>
						
						<div class="col-lg-6 info-area-right">
							<h1><?php echo $aboutus['head'] ;?></h1>
							<h4><?php echo $aboutus['title'] ;?></h4>
							<br>
							<p>
								<?php echo strip_tags($aboutus['description']) ;?>
							</p>
						</div>
					</div>
				</div>	
			</section>
			
			<?php }else{?>
			<section class="info-area pb-80 container mt-30">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-lg-6 no-padding info-area-left">
							<img class="img-fluid" src="" alt="" style="border:1px solid rgb(151, 151, 138);height: 150px;width: 100vW;">
						</div>
						
						<div class="col-lg-6 info-area-right">
							<h1>Head Text </h1>
							<h4>title</h4>
							<br>
							<p>
								short intro about us .
							</p>
						</div>
					</div>
				</div>	
			</section>
		    <?php } ?>

			<!-- Start course-mission Area -->
			<section class="course-mission-area pb-120">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Our Mission and Vision</h1>
								<!-- <p>Who are in extremely love with eco friendly system.</p> -->
							</div>
						</div>
					</div>							
                    <div class="row">
                        <div class="col-md-6 accordion-left">

                           
                            <dl class="accordion">
                                <dt>
                                    <a href="">Our Mission</a>
                                </dt>
                                <dd>
                                    To provide semi-skilled/skilled workers to industry by systematic training.
                                </dd>
                                <dt>
                                    <a href="">Our Vision</a>
                                </dt>
                                <dd>
                                    To reduce unemployment among educated youths by equipping them with suitable skills for industrial employment and self-employment.
                                </dd>
                                
                                                                  
                            </dl>
                            
                        </div>
                        <div class="col-md-6 video-right justify-content-center align-items-center d-flex relative">
                        	<div class="overlay overlay-bg"></div>
							<img class="img-fluid mx-auto" src="" alt="">
                        </div>
                    </div>
				</div>	
			</section>
	
			<!-- Start cta-two Area -->
			<?php include("include/query.php");?>
			<!-- End cta-two Area -->						    			

			<!-- start footer Area -->		
			<?php include("include/footer.php");?>