<?php
	session_start();
	include('includes/connection.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>PetShelter - Pet Details Page</title>
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
									<h1 data-aos="fade-up" data-aos-delay="0">Pet Detail Page</h1>
									<p data-aos="fade-up" data-aos-delay="100"><a href="index.php" class="text-white">Home </a>&bullet; <a href="pet.php" class="text-white">Adopt A Pet </a>&bullet; <span class="text-white">Pet Details Page</span></p>
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
						<?php
							$post = $_GET['post'];
							
							$query = "SELECT * FROM pet WHERE Pet_ID=$post";
							$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn)) ;
						
							if (mysqli_num_rows($run_query) > 0) {
								while ($row = mysqli_fetch_assoc($run_query)) {
									$post_id = $row['Pet_ID'];
									$post_image = $row['Image'];
									$post_type = $row['Type'];
									$post_name = $row['Name'];
									$post_breed = $row['Breed'];
									$post_age = $row['Age'];
									$post_gender = $row['Gender'];
									$post_size = $row['Size'];
									$post_content = $row['Content'];
									$post_status = $row['Status'];
									$post_tags = $row['Tag'];
						?>
						<div class="mb-5">
							<div class="mb-4">
								<img id="myImg" class="img-fluid rounded" src="petpics/<?php echo $post_image; ?>" width="100%" height="100%" alt="Image">
							</div>
							
							<!-- The Modal -->
							<div id="myModal" class="modal" style='overflow-y: hidden;'>
								<span class="close">&times;</span>
								<img class="modal-content" id="img01">
							</div>
							
							<h3><a href="#"><?php echo $post_name; ?></a></h3>
							<strong class="text-black mr-2"><span class="icon-paw"></span> <?php echo $post_breed; ?> . <?php echo $post_age; ?> . <?php echo $post_gender; ?> . <?php echo $post_size; ?></strong>
							
							<hr>
							<p><?php echo $post_content; ?><p>
							<hr>
							<p class="mt-4"><button class="btn btn-primary" onclick="goBack()">Back</button></p>
						</div>
						
						<?php }}?>
					</div>
					
					<script>
						// Get the modal
						var modal = document.getElementById("myModal");
						var nav = document.getElementById("myNav");

						// Get the image and insert it inside the modal
						var img = document.getElementById("myImg");
						var modalImg = document.getElementById("img01");
						var captionText = document.getElementById("caption");
						img.onclick = function(){
							modal.style.display = "block";
							modalImg.src = this.src;
							
							nav.style.display = "none";
							myBtn.style.display = "none";
						}

						// Get the <span> element that closes the modal
						var span = document.getElementsByClassName("close")[0];

						// When the user clicks on <span> (x), close the modal
						span.onclick = function() { 
							modal.style.display = "none";
							nav.style.display = "block";
						}
					
						function goBack() {
							window.history.back();
						}
					</script>
					
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