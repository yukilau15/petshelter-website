<?php 
	include 'includes/connection.php';
	include 'includes/adminheader.php';
	
	if (isset($_GET['post'])) {
		$post = mysqli_real_escape_string($conn, $_GET['post']);  
	}
	else {
		header('location:messages.php');
	}
	
	$query = "SELECT * FROM contact WHERE Msg_ID='$post'";
	$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
	
	if (mysqli_num_rows($run_query) > 0 ) {
		while ($row = mysqli_fetch_array($run_query)) {
			$post_id = $row['Msg_ID'];
			$post_fname = $row['Fname'];
			$post_lname = $row['Lname'];
			$post_subject = $row['Subject'];
			$post_email = $row['Email'];
			$post_message = $row['Message'];
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
                            Message
                        </h1>
				
					<div class="col-lg-8">
						<p><h2><?php echo $post_subject; ?></a></p>
						<p><h4><a href="#"><?php echo "$post_fname $post_lname"; ?></a></h4></p>
						<p><span>by <a href="#"><?php echo $post_email; ?></a></span></p>
						
						<br>
						
						<p><?php echo $post_message; ?></p>
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