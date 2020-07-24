<?php 
	include 'includes/connection.php';
	include 'includes/adminheader.php';
	
	if (isset($_GET['post'])) {
		$post = mysqli_real_escape_string($conn, $_GET['post']);  
	}
	else {
		header('location:pets.php');
	}

	$query = "SELECT * FROM pet WHERE Pet_ID='$post'";
	$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));

	if (mysqli_num_rows($run_query) > 0 ) {
		while ($row = mysqli_fetch_array($run_query)) {			
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

<div id="wrapper">

	<?php include 'includes/adminnav.php';?>
	
	<div id="page-wrapper">
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">
							<div class="col-xs-4">
							
								<script>
									function goBack() {
									  window.history.back();
									}
								</script>
								
								<button class="btn btn-primary" onclick="goBack()">Back</button>
							</div>
                            <?php echo $post_name; ?>'s Detail
                        </h1>
				
						<div class="col-lg-8">
							<img class="img-responsive img-rounded" src="../petpics/<?php echo $post_image; ?>" >
							<p><h2><a href="#"><?php echo $post_name; ?></a></h2></p>
							<p><h4><span class="glyphicon glyphicon-heart"></span> <?php echo $post_breed; ?> . <?php echo $post_age; ?> . <?php echo $post_gender; ?> . <?php echo $post_size; ?></h4></p>
						<hr>
							<p><?php echo $post_content; ?></p>
						<hr>
					
						<?php
								}
							}
							else {
								echo"<script>alert('Error');</script>";
							}
						?>
	        	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>