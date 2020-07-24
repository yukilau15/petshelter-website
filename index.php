<?php
	session_start();
	include('includes/connection.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>PetShelter</title>
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
		<div class="intro">
			<div class="slide-1" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-12">
							<div class="row align-items-center">
								<div class="col-lg-6 mb-4">
									<h1 data-aos="fade-up" data-aos-delay="100">Make A New Friend!</h1>
									<p class="mb-4 text-white-opacity-05"  data-aos="fade-up" data-aos-delay="200" style='font-size: 1.1rem;'>Find a great companion for life! Adopt one, instead of buying a pet. Change the path of lost, abandoned, and unwanted animals’ lives.</p>
									<p data-aos="fade-up" data-aos-delay="300"><a href="about.php" class="btn btn-primary py-3 px-5 btn-pill">Read More</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Intro End -->
		
		<!-- Content -->
		<div class="site-section" id="teachers-section">
			<div class="container">
				<div class="row mb-5 justify-content-center text-center">
					<div class="col-lg-7 text-center">
						<h2 class="section-title">How It Works</h2>
						<p class="mb-5">Adopting a pet should be easy and stress free. Our experts have created a simple, reliable, free program to help you find a pet you want adopt and take your new pet home.</p>
					</div>
				</div>
		
				<div class="row mb-5 justify-content-center text-left">
					<div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
						<div class="border">
							<h4 class="title">1. Pet Selection</h4>
							<p class="pl-3 pr-3">PetShelter.com is a website where shelters list their pets for adoption. Type and search a pet you want adopt in minutes.</p>
						</div>
					</div>
		
					<div class="col-lg-5" data-aos="fade-up" data-aos-delay="200">
						<div class="border">
							<h4 class="title">2. Meeting Authority</h4>
							<p class="pl-3 pr-3">We will give you all the tips you need and guide you through the process of setting safe and pressure-free meetings with shelters counselors.</p>
						</div>
					</div>
				</div>
		
				<div class="row mb-5 justify-content-center text-left">
					<div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
						<div class="border">
							<h4 class="title">3. Adoption Form Filling</h4>
							<p class="pl-3 pr-3">PetShelter.com provides you with a personalized adoption form. Sign the adoption contract and pay the adoption fee.</p>
						</div>
					</div>
		
					<div class="col-lg-5" data-aos="fade-up" data-aos-delay="200">
						<div class="border">
							<h4 class="title">4. Bring To New Family</h4>
							<p class="pl-3 pr-3">You have reached the final step in the adoption process. After signing the adoption contract, take your new pet home!</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Content End -->
		
		<!-- Find A Pet Section -->
		<div class="site-section courses-title" id="courses-section">
			<div class="container">
				<div class="row mb-5 justify-content-center">
					<div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="100">
						<h2 class="section-title">Find A Pet</h2>
					</div>
				</div>
			</div>
		</div>
	
	
		<div class="site-section courses-entry-wrap"  data-aos="fade-up" data-aos-delay="200">
			<div class="container">
				<div class="row">
					<div class="owl-carousel col-12 nonloop-block-14">
						<?php
							$query = "SELECT * FROM pet WHERE Status='available' ORDER BY Pet_ID ASC";
							$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
						
							if (mysqli_num_rows($run_query) > 0) {
								while ($row = mysqli_fetch_assoc($run_query)) {
									$post_id = $row['Pet_ID'];
									$post_type = $row['Type'];
									$post_name = $row['Name'];
									$post_breed = $row['Breed'];
									$post_age = $row['Age'];
									$post_gender = $row['Gender'];
									$post_size = $row['Size'];
									$post_image = $row['Image'];
									$post_content = $row['Content'];
									$post_status = $row['Status'];
									$post_tags = $row['Tag'];
						?>
						<div class="course bg-white h-100 align-self-stretch">
							<figure class="m-0">
								<a href="pet_single.php?post=<?php echo $post_id; ?>"><img class="img-fluid" src="petpics/<?php echo $post_image; ?>" alt="Image"></a>
							</figure>
						
							<div class="course-inner-text py-4 px-4">
								<span class="course-price icon-heart-o"></span>
								
								<div class="meta"><span class="icon-paw"></span> <?php echo $post_breed; ?></div>
								<h3><a href="pet_single.php?post=<?php echo $post_id; ?>"><?php echo $post_name; ?></a></h3>
								<p><?php echo $post_age; ?> . <?php echo $post_gender; ?> . <?php echo $post_size; ?></p>
							</div>
							
							<div class="d-flex border-top stats">
								<div class="py-3 px-4"><span class="icon-info_outline"></span> Meet <?php echo $post_name; ?></div>
								<div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-share2"></span></div>
							</div>
						</div>
						<?php }}?>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-7 text-center">
						<button class="customPrevBtn btn btn-primary m-1">Prev</button>
						<button class="customNextBtn btn btn-primary m-1">Next</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Section End -->
		
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