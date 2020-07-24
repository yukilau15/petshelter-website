<?php
	session_start();
	include('includes/connection.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>PetShelter - About Us</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
		<link rel="stylesheet" href="fonts/icomoon/style.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/jquery-ui.css">
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">
		<link rel="stylesheet" href="css/jquery.fancybox.min.css">
		<link rel="stylesheet" href="css/bootstrap-datepicker.css">
		<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
		<link rel="stylesheet" href="css/aos.css">
		<link rel="stylesheet" href="css/style.css">
		
		<!-- Style -->
		<?php include('includes/style.php');?>
		<!-- Style End -->
	</head>
	
	<body style='overflow-x: hidden;'>	
		<div class="site-wrap">
			<div class="site-mobile-menu site-navbar-target">
				<div class="site-mobile-menu-header">
					<div class="site-mobile-menu-close mt-3">
						<span class="icon-close2 js-menu-toggle"></span>
					</div>
				</div>
			<div class="site-mobile-menu-body"></div>
		</div>
		
		<!-- Header -->
		<?php include('includes/header.php');?>
		<!-- Header End -->
		
		<!-- Intro -->
		<div class="intro-section single-cover">
			<div class="slide-1 " style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-12">
							<div class="row justify-content-center align-items-center text-center">
								<div class="col-lg-6">
									<h1 data-aos="fade-up" data-aos-delay="0">About Us</h1>
									<p data-aos="fade-up" data-aos-delay="100"><a href="index.php" class="text-white">Home </a>&bullet; <a href="about.php" class="text-white">About</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Intro End -->
		
		<!-- Content -->
		<section class="site-section">
			<div class="container-fluid">
				<div class="row mb-5 align-items-center">	
					<div class="col-lg-6">
						<img src="images/about-img1.jpg" alt="" width="80%" height="80%" style="border-radius: 50%" data-aos="zoom-out" data-aos-delay="">
					</div>
					
					<div class="col-lg-6">
						<h1>We are pet lovers trying to make a difference</h1>
						<p>PetShelter is North America's largest non-profit pet adoption website. We help over 17,000 animal shelters, humane societies, pet rescue groups, and pet adoption agencies advertise their homeless pets to millions of adopters a month, for free. We're all about getting homeless pets into homes.</p>
						<a href="blog.php" class="customNextBtn btn btn-primary m-1">get details</a>
					</div>
				</div>
				
				<div class="row align-items-center">	
					<div class="col-lg-6">
						<img class="center" src="images/about-img2.jpg" alt="" width="50%" height="50%" style="border-radius: 50%" data-aos="zoom-out" data-aos-delay="100">
					</div>
					
					<div class="col-lg-6">
						<h1>We are here to listen from you deliver exellence</h1>
						<p>We use the power of the Internet to connect adopters with shelter pets and help pets go from alone to adopted. We also provide useful and informative information on the human/companion animal relationship to help keep pets healthy and permanently in their loving homes.</p>
						<a href="contact.php" class="customNextBtn btn btn-primary m-1">get details</a>
					</div>
				</div>
			</div>	
		</section>
		
		<!-- Our Team -->
		<div class="site-section">
			<div class="container">
				<div class="row mb-5 justify-content-center">
					<div class="col-lg-7 mb-5 text-center">
						<h2 class="section-title">Our Team</h2>
						<p class="mb-5">Our staff answered the call to volunteer in the massive effort to save pets. We have also helped in the other emergency pet rescue efforts, most recently providing coordination and new technologies to save pets.</p>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
						<div class="teacher text-center">
							<img src="images/person_1.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
						
							<div class="py-2">
								<h3 class="text-black">David Meyer</h3>
								<p class="position">Chief Executive Officer</p>
								<a href="https://www.facebook.com/"><span class="icon-facebook-square">&nbsp;</span></a>
								<a href="https://twitter.com/"><span class="icon-twitter-square">&nbsp;</span></a>
								<a href="https://www.linkedin.com/"><span class="icon-linkedin-square">&nbsp;</span></a>
							</div>
						</div>
					</div>
					
					<div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
						<div class="teacher text-center">
							<img src="images/person_2.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
							
							<div class="py-2">
								<h3 class="text-black">Ana Deluccia</h3>
								<p class="position">Product Associate</p>
								<a href="https://www.facebook.com/"><span class="icon-facebook-square">&nbsp;</span></a>
								<a href="https://twitter.com/"><span class="icon-twitter-square">&nbsp;</span></a>
								<a href="https://www.linkedin.com/"><span class="icon-linkedin-square">&nbsp;</span></a>
							</div>
						</div>
					</div>
					
					<div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
						<div class="teacher text-center">
							<img src="images/person_3.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
							
							<div class="py-2">
								<h3 class="text-black">April Harris</h3>
								<p class="position">Director of Animal Welfare Insights</p>
								<a href="https://www.facebook.com/"><span class="icon-facebook-square">&nbsp;</span></a>
								<a href="https://twitter.com/"><span class="icon-twitter-square">&nbsp;</span></a>
								<a href="https://www.linkedin.com/"><span class="icon-linkedin-square">&nbsp;</span></a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
						<div class="teacher text-center">
							<img src="images/person_4.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
						
							<div class="py-2">
								<h3 class="text-black">Matt Christian</h3>
								<p class="position">Director of Shelter Programs</p>
								<a href="https://www.facebook.com/"><span class="icon-facebook-square">&nbsp;</span></a>
								<a href="https://twitter.com/"><span class="icon-twitter-square">&nbsp;</span></a>
								<a href="https://www.linkedin.com/"><span class="icon-linkedin-square">&nbsp;</span></a>
							</div>
						</div>
					</div>
					
					<div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
						<div class="teacher text-center">
							<img src="images/person_5.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
							
							<div class="py-2">
								<h3 class="text-black">Tracy Spencer</h3>
								<p class="position">Director of Finance &amp; HR</p>
								<a href="https://www.facebook.com/"><span class="icon-facebook-square">&nbsp;</span></a>
								<a href="https://twitter.com/"><span class="icon-twitter-square">&nbsp;</span></a>
								<a href="https://www.linkedin.com/"><span class="icon-linkedin-square">&nbsp;</span></a>
							</div>
						</div>
					</div>
					
					<div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
						<div class="teacher text-center">
							<img src="images/person_6.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
							
							<div class="py-2">
								<h3 class="text-black">Ryan Davis</h3>
								<p class="position">Director of Adoption Services</p>
								<a href="https://www.facebook.com/"><span class="icon-facebook-square">&nbsp;</span></a>
								<a href="https://twitter.com/"><span class="icon-twitter-square">&nbsp;</span></a>
								<a href="https://www.linkedin.com/"><span class="icon-linkedin-square">&nbsp;</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Our Team End -->
		
		<!-- Scroll Top Button -->
		<?php include('includes/scrollTop.php');?>
		<!-- Button End -->
		
		<!-- Footer -->
		<?php include('includes/footer.php');?>
		<!-- Footer End -->
		
		</div>
		<!-- .site-wrap -->
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/jquery-migrate-3.0.1.min.js"></script>
		<script src="js/jquery-ui.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/jquery.countdown.min.js"></script>
		<script src="js/bootstrap-datepicker.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/aos.js"></script>
		<script src="js/jquery.fancybox.min.js"></script>
		<script src="js/jquery.sticky.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>