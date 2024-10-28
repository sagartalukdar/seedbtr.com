	<!-- start footer Area -->		
    <footer class="footer-area section-gap">
				<div class="container">
				<div id="logo">
			        <a href="index.php"><img src="img/logo.png" alt="" title="" class="logo-height"/></a>
			      </div>
				  
					<div class="row">
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Address</h4>
								
								<ul>
									<li><a href="#">Ballamguri, Gossaigaon</a></li>
									<li><a href="#"> P.O & P.S Gossaigaon</a></li>
									<li><a href="#">Kokrajhar, BTR, Assam</a></li>
									<li><a href="#">PIN 783360</a></li>
								</ul>								
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Quick links</h4>
								<ul>
									<li><a href="#">SEED</a></li>
									<li><a href="#">ITI Assam</a></li>
									<li><a href="#">BTR Govt</a></li>
									<li><a href="#">Employement exchange</a></li>
								</ul>								
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Admission Services</h4>
								<ul>
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Brand Assets</a></li>
									<li><a href="#">Investor Relations</a></li>
									<li><a href="#">Terms of Service</a></li>
								</ul>								
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Helpdesk</h4>
								<ul>
									<li><a href="#">+91 6000142559</a></li>
									<li><a href="#">+91 6000142559</a></li>
									
								</ul>								
							</div>
						</div>																		
						<div class="col-lg-4  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Newsletter</h4>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									 <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
									  <div class="input-group">
									    <input type="text" class="form-control" name="EMAIL" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
									    <div class="input-group-btn">
									      <button class="btn btn-default" type="submit">
									        <span class="lnr lnr-arrow-right"></span>
									      </button>    
									    </div>
									    	<div class="info"></div>  
									  </div>
									</form> 
								</div>
							</div>
						</div>											
					</div>
					<div class="footer-bottom row align-items-center justify-content-between">
						<p class="footer-text m-0 col-lg-6 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Dept of SEED, BTR | Designed, Developed & Hosted <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://smartbtr.com" target="_blank">SMARTBTR</a> 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
						<div class="col-lg-6 col-sm-12 footer-social">
							<!-- <a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a> -->
						</div>
					</div>						
				</div>
			</footer>	
			<!-- End footer Area -->	


			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
    		<script src="js/jquery.tabs.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>									
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	

			<!-- vertical news ticker js-start -->
			<script type="text/javascript">
				jQuery.fn.liScroll = function(settings) {
					settings = jQuery.extend({
						travelocity: 0.03
						}, settings);	
						
						return this.each(function(){
						var $strip = jQuery(this);
						$strip.addClass("newsticker")
						var stripHeight = 1;
						$strip.find("li").each(function(i){
							stripHeight += jQuery(this, i).outerHeight(true); // thanks to Michael Haszprunar and Fabien Volpi
						});
						
						var $mask = $strip.wrap("<div class='mask'></div>");
						var $tickercontainer = $strip.parent().wrap("<div class='tickercontainer'></div>");								
						var containerHeight = $strip.parent().parent().height();	//a.k.a. 'mask' width 	
						$strip.height(stripHeight);			
						var totalTravel = stripHeight;
						var defTiming = totalTravel/settings.travelocity;	// thanks to Scott Waye		
						function scrollnews(spazio, tempo){
						$strip.animate({top: '-='+ spazio}, tempo, "linear", function(){$strip.css("top", containerHeight); scrollnews(totalTravel, defTiming);});
						}
						
						scrollnews(totalTravel, defTiming);				
						$strip.hover(function(){
						jQuery(this).stop();
						},
						function(){
						var offset = jQuery(this).offset();
						var residualSpace = offset.top + stripHeight;
						var residualTime = residualSpace/settings.travelocity;
						scrollnews(residualSpace, residualTime);
						});			
						});	
				};

				$(function(){
					$("ul#ticker01").liScroll();
				}); 
			</script>
			<!-- vertical news ticker js-end -->
		</body>
	</html>