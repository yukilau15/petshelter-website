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
                        <h1 class="page-header">
							<div class="col-xs-4">
								<a href="publishnews.php" class="btn btn-primary">Add New</a>
							</div>
                            All posts
                        </h1>
                
				<!-- Page Content -->
				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive">

							<form action="" method="post">
								<table class="table table-bordered table-striped table-hover">

								<thead>
									<tr>
									<th>ID</th>
									<th>Image</th>
									<th>Title</th>
									<th>Author</th>
									<th>Date</th>
									<th>Status</th>
									<th>Tags</th>
									<th>View Post</th>
									<th>Edit</th>
									<th>Delete</th>
									<th>Publish</th>
									</tr>
								</thead>
								
								<tbody>
								<?php
								$query = "SELECT * FROM post ORDER BY Pos_ID DESC";
								$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
								
								if (mysqli_num_rows($run_query) > 0) {
									while ($row = mysqli_fetch_array($run_query)) {
										$post_id = $row['Pos_ID'];
										$post_image = $row['Image'];
										$post_title = $row['Title'];
										$post_author = $row['Author'];
										$post_content = $row['Content'];
										$post_date = $row['Postdate'];
										$post_status = $row['Status'];
										$post_tags = $row['Tag'];
										
										echo "<tr>";
										echo "<td>$post_id</td>";
										echo "<td><a href='post.php?post=$post_id'><img width='100px' src='../postpics/$post_image' alt='Image'></a></td>";
										echo "<td>$post_title</td>";
										echo "<td>$post_author</td>";
										echo "<td>$post_date</td>";
										echo "<td>$post_status</td>";
										echo "<td>$post_tags</td>";
										echo "<td><a href='post.php?post=$post_id' style='color:green'>See Post</a></td>";
										echo "<td><a href='editposts.php?id=$post_id'><span class='glyphicon glyphicon-edit' style='color: #265a88;'></span></a></td>";
										echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete this post?')\" href='?del=$post_id'>delete</a></td>";
										echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to publish this post?')\"href='?pub=$post_id'>publish</a></td>";
										echo "</tr>";
									}
								}
								else {
									echo "<script>alert('Not news yet! Start posting now');
									window.location.href= 'publishnews.php';</script>";
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
				$del_query = "DELETE FROM post WHERE Pos_ID='$post_del'";
				$run_del_query = mysqli_query($conn, $del_query) or die (mysqli_error($conn));
        
				if (mysqli_affected_rows($conn) > 0) {
					echo "<script>alert('Post deleted successfully');
					window.location.href='posts.php';</script>";
				}
				else {
					echo "<script>alert('Error occured. Please try again!');</script>";   
				}
			}
			
			if (isset($_GET['pub'])) {
				$post_pub = mysqli_real_escape_string($conn,$_GET['pub']);
				$pub_query = "UPDATE post SET status='published' WHERE Pos_ID='$post_pub'";
				$run_pub_query = mysqli_query($conn, $pub_query) or die (mysqli_error($conn));
				
				if (mysqli_affected_rows($conn) > 0) {
					echo "<script>alert('Post published successfully');
					window.location.href='posts.php';</script>";
				}
				else {
					echo "<script>alert('Already published!');</script>";    
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