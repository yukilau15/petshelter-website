<?php 
	include 'includes/connection.php';
	include 'includes/adminheader.php';
	
	if (isset($_GET['post'])) {
		$post = mysqli_real_escape_string($conn, $_GET['post']);  
	}
	else {
		header('location:posts.php');
	}
	
	$query = "SELECT * FROM post WHERE Pos_ID='$post'";
	$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
	
	if (mysqli_num_rows($run_query) > 0 ) {
		while ($row = mysqli_fetch_array($run_query)) {
			$post_id = $row['Pos_ID'];
			$post_image = $row['Image'];
			$post_title = $row['Title'];
			$post_author = $row['Author'];
			$post_content = $row['Content'];
			$post_date = $row['Postdate'];
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
                            Post Detail
                        </h1>
				
					<div class="col-lg-8">	
						<p><h2><a href="#"><?php echo $post_title; ?></a></h2></p>
						<p><h4>by <a href="#"><?php echo $post_author; ?></a></h4></p>
						<p><span class="glyphicon glyphicon-time"></span> Posted on: <?php echo $post_date; ?></p>
						<img class="img-responsive img-rounded" src="../postpics/<?php echo $post_image; ?>" alt="Image">
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