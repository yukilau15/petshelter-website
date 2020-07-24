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
								<a href="addPet.php" class="btn btn-primary">Add New</a>
							</div>
                            All pets
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
									<th>Name</th>
									<th>Breed</th>
									<th>Age</th>
									<th>Gender</th>
									<th>Size</th>
									<th>Status</th>
									<th>Tags</th>
									<th>View Pet</th>
									<th>Edit</th>
									<th>Delete</th>
									<th>Adopt</th>
									
									</tr>
								</thead>
								
								<tbody>
								<?php
								$query = "SELECT * FROM pet ORDER BY Pet_ID DESC";
								$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
								
								if (mysqli_num_rows($run_query) > 0) {
									while ($row = mysqli_fetch_array($run_query)) {
										$post_id = $row['Pet_ID'];
										$post_type = $row['Type'];
										$post_name = $row['Name'];
										$post_breed = $row['Breed'];
										$post_age = $row['Age'];
										$post_gender = $row['Gender'];
										$post_size = $row['Size'];
										$post_image = $row['Image'];
										$post_status = $row['Status'];
										$post_content = $row['Content'];
										$post_tag = $row['Tag'];

										echo "<tr>";
										echo "<td>$post_id</td>";
										echo "<td><a href='pet.php?post=$post_id'><img width='100px' src='../petpics/$post_image' alt='Image'></a></td>";
										echo "<td>$post_name</td>";
										echo "<td>$post_breed</td>";
										echo "<td>$post_age</td>";
										echo "<td>$post_gender</td>";
										echo "<td>$post_size</td>";
										echo "<td>$post_status</td>";
										echo "<td>$post_tag</td>";
										echo "<td><a href='pet.php?post=$post_id' style='color:green'>See Post</a></td>";
										echo "<td><a href='editpets.php?id=$post_id'><span class='glyphicon glyphicon-edit' style='color: #265a88;'></span></a></td>";
										echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete this pet?')\" href='?del=$post_id'>delete</a></td>";
										echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to adopt this pet?')\"href='?pub=$post_id'>adopt</a></td>";
										echo "</tr>";
									}
								}
								else {
									echo "<script>alert('No pets yet! Start adding now');
									window.location.href= 'addpet.php';</script>";
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
				$del_query = "DELETE FROM pet WHERE Pet_ID='$post_del'";
				$run_del_query = mysqli_query($conn, $del_query) or die (mysqli_error($conn));
        
				if (mysqli_affected_rows($conn) > 0) {
					echo "<script>alert('Pet deleted successfully');
					window.location.href='pets.php';</script>";
				}
				else {
					echo "<script>alert('Error occured. Please try again!');</script>";   
				}
			}
			
			if (isset($_GET['pub'])) {
				$post_pub = mysqli_real_escape_string($conn,$_GET['pub']);
				$pub_query = "UPDATE pet SET status='adopted' WHERE Pet_ID='$post_pub'";
				$run_pub_query = mysqli_query($conn, $pub_query) or die (mysqli_error($conn));
				
				if (mysqli_affected_rows($conn) > 0) {
					echo "<script>alert('Pet adopted successfully');
					window.location.href='pets.php';</script>";
				}
				else {
					echo "<script>alert('Already adopted!');</script>";    
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