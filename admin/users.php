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
                        <h1 class="page-header">All users</h1>

							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>Id</th>
										<th>Username</th>
										<th>Email</th>
										<th>Role</th>
										<th>Delete</th>
									</tr>
								</thead>

								<tbody>
			
									<?php 
										$query = "SELECT * FROM account";
										$select_users = mysqli_query($conn, $query) or die(mysqli_error($conn));
										
										if (mysqli_num_rows($select_users) > 0 ) {
										while ($row = mysqli_fetch_array($select_users)) {
											$user_id = $row['Acc_ID'];
											$username = $row['Username'];
											$user_email = $row['Email'];
											$user_role = $row['Type'];
											echo "<tr>";
											echo "<td>$user_id</td>";
											echo "<td>$username</td>";
											echo "<td>$user_email</td>";
											echo "<td>$user_role</td>";
											echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete this user?')\" href='users.php?delete=$user_id'><i class='fa fa-times fa-lg'></i>delete</a></td>";
											echo "</tr>";
										 }
									?>

								</tbody>
							</table>

									<?php 
										}
										
										if (isset($_GET['delete'])) {
											$the_user_id = $_GET['delete'];
											$query0 = "SELECT type FROM account WHERE Acc_ID = '$the_user_id'";
											$result = mysqli_query($conn , $query0) or die(mysqli_error($conn));

											$query = "DELETE FROM account WHERE Acc_ID = '$the_user_id'";
											$delete_query = mysqli_query($conn, $query) or die (mysqli_error($conn));
											
											if (mysqli_affected_rows($conn) > 0 ) {
												echo "<script>alert('User deleted successfully');
												window.location.href= 'users.php';</script>";
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