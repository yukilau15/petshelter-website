<?php
	include ('includes/connection.php'); 
	include "includes/adminheader.php";
?>

<div id="wrapper">

	<?php include 'includes/adminnav.php';?>
	
		<div id="page-wrapper">
			<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">All subscribers</h1>

							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>Id</th>
										<th>Email</th>
										<th>Delete</th>
									</tr>
								</thead>

								<tbody>
        
									<?php 
										$query = "SELECT * FROM subscribe";
										$select_users = mysqli_query($conn, $query) or die(mysqli_error($conn));
										
										if (mysqli_num_rows($select_users) > 0 ) {
											while ($row = mysqli_fetch_array($select_users)) {
												$user_id = $row['Sub_ID'];
												$user_email = $row['Email'];
												echo "<tr>";
												echo "<td>$user_id</td>";
												echo "<td>$user_email</td>";
												echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete this subscriber?')\" href='subscribers.php?delete=$user_id'><i class='fa fa-times fa-lg'></i>delete</a></td>";
												echo "</tr>";
											 }
										}
										else {
											echo "<script>alert('No subscribers yet! Back to dashboard');
											window.location.href= 'index.php';</script>";
										}
									?>

								</tbody>
							</table>

									<?php 
										if (isset($_GET['delete'])) {
											$the_user_id = $_GET['delete'];
											
											$query = "DELETE FROM subscribe WHERE Sub_ID = '$the_user_id'";
											$delete_query = mysqli_query($conn, $query) or die (mysqli_error($conn));
											
											if (mysqli_affected_rows($conn) > 0 ) {
												echo "<script>alert('Subscriber deleted successfully');
												window.location.href= 'subscribers.php';</script>";
											}
										}
									?>
					</div>
				</div>
 
		</div>
	</div>
</div>

<?php
	include('includes/adminfooter.php');
?>