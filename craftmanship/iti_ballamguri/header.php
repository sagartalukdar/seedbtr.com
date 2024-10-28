<?php 
include("admin/classes/Crud.php");
$crud = new Crud();
$read = $crud->Read("slider","1");

$read3 = $crud->Read("about_us","1");
$read4 = $crud->Read("events","1");
$read5 = $crud->Read("trades","1");
$news = $crud->Read("newsupdates","1");

?>

<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>ITI Balamguri</title>
		

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">			
			<link rel="stylesheet" href="css/jquery-ui.css">			
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="css/custom.css">
		</head>
		<body>	
		  <header id="header" id="home">
	  		<div class="header-top">
	  			<div class="container">
			  		<div class="row">
			  			<div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
			  				<!-- <ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
			  				</ul> -->			
			  			</div>
			  			<div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
			  				<a href="tel:+91 6000142559"><span class="lnr lnr-phone-handset"></span> <span class="text"><i class="fa fa-phone">+91 6000142559</i></span></a>
			  				<a href="mailto:itiballamguri@gmail.com"><span class="lnr lnr-envelope"></span> <span class="text">itiballamguri@gmail.com</span></a>			
			  			</div>
			  		</div>			  					
	  			</div>
			</div>
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="index.php"><img src="img/logo.png" alt="" title="" class="logo-height"/></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="index.php">Home</a></li>
			          <li class="menu-has-children"><a href="">About</a>
			            <ul>
			              <li><a href="about.php">About us</a></li>
			              <li><a href="infrastructure.php">Infrastructure</a></li>
			            </ul>
			          </li>
			          
			          <li><a href="scheme-trades.php">Schemes & Trades</a></li>
			          <li><a href="events.php">Events</a></li>
			          <li><a href="gallery.php">Gallery</a></li>
			          <li class="menu-has-children"><a href="#">Records</a>
			            <ul>
			              <li><a href="trainee.php">Trainees</a></li>
			              <li><a href="instructor.php">Instructor</a></li>
			              <li><a href="staffs.php">Staffs</a></li>
			            </ul>
			          </li>	
			          <!-- <li class="menu-has-children"><a href="">Pages</a>
			            <ul>
		              		<li><a href="course-details.php">Course Details</a></li>		
		              		<li><a href="event-details.php">Event Details</a></li>		
			                <li><a href="elements.php">Elements</a></li>
					          <li class="menu-has-children"><a href="">Level 2 </a>
					            <ul>
					              <li><a href="#">Item One</a></li>
					              <li><a href="#">Item Two</a></li>
					            </ul>
					          </li>					                		
			            </ul>
			          </li>	 -->				          					          		          
			          <li><a href="contact.php">Contact</a></li>
					  <!-- <li class="menu-has-children"><a href="">Sign-in/up</a>
			            <ul>
			              <li><a href="login.php">Sign-in</a></li>
			              <li><a href="blog-single.php">Sign-up</a></li>
			            </ul>
			          </li> -->
			        </ul>
			      </nav>
				  <div class="logodi">
			        <a href="index.php"><img src="img/di.png" alt="" title="" class="logo-heightdi"/></a>					
			      </div>
				  <!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->