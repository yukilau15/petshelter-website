<?php
	session_start();
	include('includes/connection.php');
	include("contact_process.php");
	contactus();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>PetShelter - Contact Us</title>
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
									<h1 data-aos="fade-up" data-aos-delay="0">Contact Us</h1>
									<p data-aos="fade-up" data-aos-delay="100"><a href="index.php" class="text-white">Home </a>&bullet; <a href="contact.php" class="text-white">Contact</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
		<!-- Intro End -->
	
		<!-- Contact -->
		<div class="site-section">
			<div class="container">		
				<div class="justify-content-center">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47364.22648704967!2d-75.93860601155806!3d42.10181312629654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89daef72dfadb7d1%3A0x68f9703f7ed337f!2sBinghamton%2C%20NY%2C%20USA!5e0!3m2!1sen!2smy!4v1591207255512!5m2!1sen!2smy" width="1140" height="445" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
			
				<div class="row justify-content-center">
					<div class="col-md-5 mt-5">
						<div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
							<div class="mr-3">
								<span class="custom-icon-inner">
									<span class="icon icon-home"></span>
								</span>
							</div>
							<div><h5>Binghamton, New York</h5><p>4343 Hinkle Deegan Lake Road</p></div>
						</div>
					
						<div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
							<div class="mr-3">
								<span class="custom-icon-inner">
									<span class="icon icon-phone"></span>
								</span>
							</div>
							<div><h5>00 (953) 9865 562</h5><p>Mon to Fri 9am to 6 pm</p></div>
						</div>
					
						<div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
							<div class="mr-3">
								<span class="custom-icon-inner">
									<span class="icon icon-message"></span>
								</span>
							</div>
							<div><h5>support@petshelter.com</h5><p>Send us your query anytime!</p></div>
						</div>
					</div>
			
					<div class="col-md-6 mt-5">
						<form action="" method="post" data-aos="fade">
							<div class="form-group row">
								<div class="col-md-6 mb-3 mb-lg-0">
									<input type="text" name="fname" class="form-control" placeholder="First Name" required>
								</div>
								<div class="col-md-6">
									<input type="text" name="lname" class="form-control" placeholder="Last Name" required>
								</div>
							</div>

							<div class="form-group row">
								<div class="col-md-12">
									<input type="text" name="subject" class="form-control" placeholder="Subject" required>
								</div>
							</div>

							<div class="form-group row">
								<div class="col-md-12">
									<input type="email" name="email" class="form-control" placeholder="Email Address" required>
								</div>
							</div>
						
							<div class="form-group row">
								<div class="col-md-12">
									<textarea class="form-control" name="message" id="" cols="30" rows="10" placeholder="Write your message here." required></textarea>
								</div>
							</div>

							<div class="form-group row">
								<div class="col-md-6">
									<input type="submit" name="submitMessage" class="btn btn-primary py-3 px-5 btn-block btn-pill" value="Send Message">
								</div>
							</div>
						</form>
					</div>
				
				</div>
			</div>
		</div>
		<!-- Contact End -->
	
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