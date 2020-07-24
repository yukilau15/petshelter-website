<?php
	session_start();
	include('includes/connection.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>PetShelter - Blog</title>
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
									<h1 data-aos="fade-up" data-aos-delay="0">Blog</h1>
									<p data-aos="fade-up" data-aos-delay="100"><a href="index.php" class="text-white">Home </a>&bullet; <a href="blog.php" class="text-white">Blog</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
		<!-- Intro End -->
		
		<!-- Content -->
		<div class="site-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<?php
							$query = "SELECT * FROM post WHERE Status='published' ORDER BY Updated DESC";
							$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));

							if (mysqli_num_rows($run_query) > 0) {
								while ($row = mysqli_fetch_assoc($run_query)) {
									$post_id = $row['Pos_ID'];
									$post_title = $row['Title'];
									$post_author = $row['Author'];
									$post_date = $row['Postdate'];
									$post_image = $row['Image'];
									$post_content = $row['Content'];
									$post_status = $row['Status'];
									$post_tags = $row['Tag'];
									
									if ($post_status !== 'published') {
										echo "<h3><a href='#'>No Posts Yet</a></h3>";
									}
									else { 
						?>
						<div class="mb-5">
							<h3><a href="blog_single.php?post=<?php echo $post_id; ?>"><?php echo $post_title; ?></a></h3>
							<p class="mb-4">
								<strong class="text-black mr-2">by</strong><?php echo $post_author; ?><br>
								<strong class="text-black mr-2">Posted on:</strong><?php echo $post_date; ?>
							</p>
					
							<div class="mb-4">
								<a href="blog_single.php?post=<?php echo $post_id; ?>">
									<img class="img-fluid rounded" src="postpics/<?php echo $post_image; ?>" width="100%" height="100%"  alt="Image">
								</a>
							</div>
					
							<?php echo substr($post_content, 0, 350) . '.........'; ?>
						
							<p class="mt-4"><a href="blog_single.php?post=<?php echo $post_id; ?>" class="btn btn-primary">Read More</a></p>
						</div>
			
						<hr>
			
						<?php }}} ?>
					</div>
					
					<!-- Sidebar -->
					<?php include('includes/sidebar.php');?>
					<!-- Sidebar End -->
				
				</div>
			</div>
		</div>
		<!-- Content End -->
	
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