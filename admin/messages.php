<?php
	include 'includes/adminheader.php';
?>

<div id="wrapper">

	<?php include 'includes/adminnav.php';?>
	
		<div id="page-wrapper">
			<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">All messages</h1>
                
				<!-- Page Content -->
				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive">

							<form action="" method="post">
								<table class="table table-bordered table-striped table-hover">

								<thead>
									<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Subject</th>
									<th>Email</th>
									<th>Message</th>
									<th>View Message</th>
									<th>Delete</th>
									</tr>
								</thead>
								
								<tbody>
								<?php
								$query = "SELECT * FROM contact ORDER BY Msg_ID DESC";
								$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
								
								if (mysqli_num_rows($run_query) > 0) {
									while ($row = mysqli_fetch_array($run_query)) {
										$post_id = $row['Msg_ID'];
										$post_fname = $row['Fname'];
										$post_lname = $row['Lname'];
										$post_subject = $row['Subject'];
										$post_email = $row['Email'];
										$post_message = $row['Message'];
										
										$post_msg = substr($post_message, 0, 20) . '.........';
										
										echo "<tr>";
										echo "<td>$post_id</td>";
										echo "<td>$post_fname $post_lname</td>";
										echo "<td>$post_subject</td>";
										echo "<td>$post_email</td>";
										echo "<td>$post_msg</td>";
										echo "<td><a href='message.php?post=$post_id' style='color:green'>See Message</a></td>";
										echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete this message?')\" href='?del=$post_id'>delete</a></td>";
										echo "</tr>";
									}
								}
								else {
									echo "<script>alert('No messages yet! Back to dashboard');
									window.location.href= 'index.php';</script>";
								}
								?>
								</tbody>
							
							</table>
						</form>
					
					</div>
				</div>
			</div>
			
			<?php
			if (isset($_GET['del'])) {
				$post_del = mysqli_real_escape_string($conn, $_GET['del']);
				$del_query = "DELETE FROM contact WHERE Msg_ID='$post_del'";
				$run_del_query = mysqli_query($conn, $del_query) or die (mysqli_error($conn));
        
				if (mysqli_affected_rows($conn) > 0) {
					echo "<script>alert('Message deleted successfully');
					window.location.href='messages.php';</script>";
				}
				else {
					echo "<script>alert('Error occured. Please try again!');</script>";   
				}
			}
			?>
			
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>