<!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
	var chatbox = document.getElementById('fb-customer-chat');
	chatbox.setAttribute("page_id", "917926698263929");
	chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
	window.fbAsyncInit = function() {
		FB.init({
			xfbml: true,
			version: 'v14.0'
		});
	};

	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s);
		js.id = id;
		js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>



<!-- Footer Version 2 -->
<!-- Footer Version 2 -->
<div class="footer-v2">

	<div class="footer">
		<div class="container">
			<div class="row">
				<!-- About -->
				<div class="col-md-3 md-margin-bottom-40">
					<a href="index.php"><img id="logo-footer" class="footer-logo" src="assets/img/NoboITlogo.jpg" alt=""></a>
					<p class="margin-bottom-20">Nobo IT is a growing up software company in Bangladesh. We provide domain registration, hosting, web application and digital marketing services.</p>

					<ul class="list-unstyled link-list">
						<li><a href="https://noboit.com/sitemap.xml">SITEMAP</a></li>
						<li><a href="https://noboit.com/portfolio/">PORTFOLIO</a></li>
						<li><a href="https://noboit.com/privacy-policy.php">PRIVACY POLICY</a></li>
						<li><a href="#">FAQ</a></li>
					</ul>

					<!-- google review links -->
					<div class="row-review">

						<h4><b>- Leave a Review on us</b></h4>

						<div class="column-review">
							<a href="https://g.page/r/Cd4W1OFo5GzaEAg/review" target="_blank"><img title="Write a Review On Us" src="<?php echo base_url() . '../' ?>assets/img/google-review/write-review.png"></a>
						</div>

						<div class="column-review">
							<a href="https://www.google.com/maps/place/Nobo+IT/@23.7990978,90.3723399,15z/data=!4m7!3m6!1s0x0:0xda6ce468e1d416de!8m2!3d23.7990978!4d90.3723399!9m1!1b1" target="_blank"><img title="See Our Google Profile" src="<?php echo base_url() . '../' ?>assets/img/google-review/google-review.jpg"></a>
						</div>

					</div>
					<style type="text/css">
						.column-review {
							float: left;
							width: 50%;
							padding: 10px;
						}

						.column-review img {
							height: 70px;
							width: 100px;
						}

						.row-review:after {
							content: "";
							display: table;
							clear: both;
						}

						@media screen and (max-width: 600px) {
							.column-review {
								width: 100%;
							}
						}
					</style>



					<br>

					<!-- email subscription form -->
					<form action="email-subscription.php" method="post">
						<input type="email" name="email" id="" placeholder="Your E-mail to subscribe" class="form-control" required>
						<br>
						<button class="btn btn-success" type="submit">Send</button>
					</form>
					<!-- subscription form ends -->
				</div>

				<!-- End About -->

				<!-- Link List -->
				<div class="col-md-3 md-margin-bottom-40">
					<div class="headline">
						<h2 class="heading-sm">Our Service Area</h2>
					</div>
					<p><b>- in Bangladesh</b></p>
					<ul class="list-unstyled link-list">
						<li><a href="https://noboit.com/Software-and-Website-Development-Company-in-Dhaka.php">Dhaka</a></li>
						<li><a href="https://noboit.com/Software-and-Website-Development-Company-in-Chittagong.php">Chittagong</a></li>
						<li><a href="https://noboit.com/Software-and-Website-Development-Company-in-Sylhet.php">Sylhet</a></li>
						<li><a href="https://noboit.com/Software-and-Website-Development-Company-in-Barishal.php">Barishal</a></li>
						<li><a href="https://noboit.com/Software-and-Website-Development-Company-in-Khulna.php">Khulna</a></li>
						<li><a href="https://noboit.com/Software-and-Website-Development-Company-in-Rajshahi.php">Rajshahi</a></li>
						<li><a href="https://noboit.com/Software-and-Website-Development-Company-in-Mymensingh.php">Mymensingh</a></li>
						<li><a href="https://noboit.com/Software-and-Website-Development-Company-in-Rangpur.php">Rangpur</a></li>
					</ul>
					<p><b>- international</b></p>
					<ul class="list-unstyled link-list">
						<li><a href="#">USA</a></li>
						<li><a href="#">UK</a></li>
						<li><a href="#">Germany</a></li>
						<li><a href="#">Japan</a></li>
						<li><a href="#">Australia</a></li>
					</ul>

				</div>
				<!-- End Link List -->

				<!-- Payment Method -->
				<div class="col-md-3 md-margin-bottom-40">
					<div class="latest-tweets">
						<div class="headline">
							<h2 class="heading-sm">Key Services</h2>
						</div>
						<ul class="list-unstyled link-list">
							<li><a href="https://noboit.com/software.php">Software Development</a></li>
							<li><a href="https://noboit.com/website.php">Website Design & Development</a></li>
							<li><a href="https://noboit.com/Android-Application.php">Android App Development</a></li>
							<li><a href="https://noboit.com/hosting.php">Server Hosting</a></li>
							<li><a href="https://noboit.com/domain.php">Domain</a></li>
							<li><a href="https://noboit.com/sms.php">BULK SMS</a></li>
							<li><a href="https://noboit.com/Ecommerce-website-development.php">E-Commerce Website</a></li>
							<li><a href="https://noboit.com/Classified-Website-Development-in-Bangladesh.php">Classified Website Development</a></li>
							<li><a href="https://www.noboit.com/Hospital-Software.php">Hospital Management System</a></li>
							<li><a href="https://noboit.com/search-engine-optimization.php">SEO</a></li>
							<li><a href="https://noboit.com/Mobile-Application-Development.php">Mobile Application</a></li>
							<li><a href="https://noboit.com/cctv.php">CCTV</a></li>
							<li><a href="https://www.noboit.com/facebook-marketing.php">Facebook Marketing</a></li>
							<li><a href="https://www.noboit.com/cyber-security-service-in-bangladesh.php">Cyber Security</a></li>
							<li><a href="https://noboit.com/Customized-software-development-company-in-bangladesh.php">Customized Software Development</a></li>
						</ul>

					</div>
				</div>
				<!-- End Latest post -->

				<!-- Address -->
				<div class="col-md-3 md-margin-bottom-40">
					<div class="headline">
						<h2 class="heading-sm">Contact Us</h2>
					</div>
					<address class="md-margin-bottom-40">
						<i class="fa fa-home"></i>Akhanda Tower(Press Market), <br>Plot-12, Block: Kha, Road- 1,<br>
						Mirpur 10, Dhaka 1216<br />
						<i class="fa fa-phone"></i>Phone: +8801714591565 <br />
						<i class="fa fa-phone"></i>Cell: +8801614591565 <br />
						<i class="fa fa-globe"></i>Website: <a href="https://noboit.com/">www.noboit.com</a> <br />
						<i class="fa fa-envelope"></i>Email: <a href="mailto:info@noboit.com.com">info@noboit.com</a>
					</address>

					<!-- Calendly inline widget begin -->
					<h4><b>- Connect</b></h4>
					<div class="calendly-inline-widget" data-url="https://calendly.com/noboit/15min" style="min-width:250px;height:250px;">
					</div>

					<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async>
					</script>
					<!-- Calendly inline widget end -->

					<!-- Social Links -->
					<h4><b>- Nobo IT on Social Media</b></h4>
					<ul class="social-icons">
						<li><a href="https://www.facebook.com/noboitbd/" target="_blank" data-original-title="Facebook" class="rounded-x social_facebook"></a></li>
						<li><a href="https://twitter.com/it_nobo/" target="_blank" data-original-title="Twitter" class="rounded-x social_twitter"></a></li>
						<li><a href="https://www.youtube.com/channel/UCh7TFmyCm9_C5WPtYaqABew/" data-original-title="Youtube" class="rounded-x social_youtube"></a></li>
						<li><a href="https://www.linkedin.com/company/nobo-it/" target="_blank" data-original-title="Linkedin" class="rounded-x social_linkedin"></a></li>
						<li><a href="https://www.pinterest.com/noboitbd/" target="_blank" data-original-title="Pinterest" class="rounded-x social_pinterest"></a></li>
					</ul>
					<!-- End Social Links -->
				</div>
				<!-- End Address -->
			</div>
		</div>
	</div><!--/footer-->

	<div class="copyright">
		<div class="container">
			<p class="text-center">2015-2022 &copy; All Rights Reserved. Powered by <a target="_blank" href="https://www.noboit.com">Nobo IT</a></p>
		</div>
	</div>
	<div class="whatsapp">
		<a href="https://wa.me/+8801714591565 " target="_blank">
			<img src="<?php echo base_url() . '../' ?>assets/img/whatsapp-icon-image.png" alt="Click to Chat">
		</a>
	</div>
	<!--/copyright-->
</div>



<!-- JS Global Compulsory -->			
<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<script src="assets/plugins/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/plugins/counterup/counterup.min.js"></script>
<script src="assets/plugins/isotope-layout/isotope.pkgd.min.js"></script>

 
 
  
  <!--main-js-->
 <script src="assets/js/service_product.js"></script>
  
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="assets/plugins/parallax-slider/js/modernizr.js"></script>
<script type="text/javascript" src="assets/plugins/parallax-slider/js/jquery.cslider.js"></script>
<!-- JS Customization -->
<script type="text/javascript" src="assets/js/custom.js"></script>


<!-- JS Page Level -->           
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/plugins/parallax-slider.js"></script>
<script type="text/javascript" src="assets/js/plugins/style-switcher.js"></script>


<script type="text/javascript">
    jQuery(document).ready(function() {
      	App.init();
        App.initSliders();
        StyleSwitcher.initStyleSwitcher();      
        ParallaxSlider.initParallaxSlider();
    });
</script>



<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/js/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->
