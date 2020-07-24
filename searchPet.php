<?php
	session_start();
	include('includes/connection.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>PetShelter - Adopt A Pet</title>
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
									<h1 data-aos="fade-up" data-aos-delay="0">Adopt A Pet</h1>
									<p data-aos="fade-up" data-aos-delay="100"><a href="index.php" class="text-white">Home </a>&bullet; <a href="pet.php" class="text-white">Adopt A Pet</span></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
		<!-- Intro End -->
	
		<!-- Find A Pet Section -->
		<div class="site-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="row">
							<?php
								if (isset($_POST['submit'])) {
									$search = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["search"]));
									
									$query = "SELECT * FROM pet WHERE Tag LIKE '%$search%' AND Status='available'";
									$search_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
									$count = mysqli_num_rows($search_query);
		
									if ($count == 0) {
										echo "<script>alert('Sorry, no result found for your query');
											  window.location.href='pet.php';</script>";
									}
									else {
										while ($row = mysqli_fetch_array($search_query)) {
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
							<div class="col-md-4 mb-3 mb-lg-4 mb-4">
								<div class="course bg-white h-100 align-self-stretch">
									<figure class="m-0">
										<a href="pet_single.php?post=<?php echo $post_id; ?>"><img class="img-fluid" src="petpics/<?php echo $post_image; ?>" alt="Image"></a>
									</figure>
						
									<div class="course-inner-text py-4 px-4">
										<a>
										<span class="course-price icon-heart-o"></span>
										<div class="meta h6"><span class="icon-paw"></span> <?php echo $post_breed; ?></div>
										</a>
										<h3><a href="pet_single.php?post=<?php echo $post_id; ?>"><?php echo $post_name; ?></a></h3>
										<p class="h6"><?php echo $post_age; ?> . <?php echo $post_gender; ?> . <?php echo $post_size; ?></p>
									</div>
								</div>
							</div>
							
							<?php }}}?>
						</div>
					</div>
					
					<!-- Sidebar -->
					<?php include('includes/sidebar2.php');?>
					<!-- Sidebar End -->
					
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