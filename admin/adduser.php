<?php
	include('includes/connection.php');
	include('includes/adminheader.php');
	
	if (isset($_POST['add'])) {
		$username = $_POST['username'];
		$email = $_POST['email'];
		$role = $_POST['role'];
		$pass = $_POST['password'];
		$cpass = $_POST['cpassword'];
									
		if ($pass !== $cpass) {
			echo "<div style='background: white; padding: 20px 250px 0px;'><font color='red'>New password and Confirm New password do not match</font></div>";
		}
		else{
			$password = password_hash("$pass" , PASSWORD_DEFAULT);
										
			$query = "INSERT INTO account(Username,Email,Password,Type) VALUES ('$username' , '$email', '$password' , '$role')";
			$result = mysqli_query($conn , $query) or die(mysqli_error($conn));
										
			if (mysqli_affected_rows($conn) > 0) {
				echo "<script>alert('New User Successfully Added!');
				window.location.href='users.php';</script>";
			}
			else {
				echo "<script>alert('An error occured, please try again!');</script>";
			}
		}								
	}
?>

<div id="wrapper">

	<?php include 'includes/adminnav.php';?>
	
		<div id="page-wrapper">
			<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add a new user</h1>
						
							<form role="form" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="user_title">User Name</label>
									<input type="text" name="username" placeholder="Enter username" value= "<?php if(isset($_POST['add'])) { echo $username; } ?>"  class="form-control" required>
								</div>
								
								<div class="input-group">
									<label for="user_role">Role</label>
									<select class="form-control" name="role" required>
										<?php
											if(isset($_POST['add'])) { 
												if($post_gender=='admin'){
													echo "<option value='$role'>Admin</option>";
													echo "<option value='user'>User</option>";
												}
												else{
													echo "<option value='$role'>User</option>";
													echo "<option value='admin'>Admin</option>";
												}
											}
											else{
												echo "<option value=''>Select Role</option>";
												echo "<option value='admin'>Admin</option>";
												echo "<option value='user'>User</option>";
											}
										?>
									</select>
								</div>
								
								<br>
								
								<div class="form-group">
									<label for="user_tag">Email</label>
									<input type="email" name="email" placeholder="Enter email" value= "<?php if(isset($_POST['add'])) { echo $email; } ?>"  class="form-control" required>
								</div>
								
								<div class="form-group">
									<label for="user_tag">Password</label>
									<input type="password" name="password" placeholder="Enter new password" class="form-control" required>
								</div>
								
								<div class="form-group">
									<label for="user_tag">Confirm Password</label>
									<input type="password" name="cpassword" placeholder="Re-enter new password" class="form-control" required>
								</div>

								<button type="submit" name="add" class="btn btn-primary" value="Add User">Add User</button>
							</form>
					</div>
				</div>

			</div>
		</div>
        
	<?php
		include('includes/adminfooter.php');
	?>
		
</div>
	
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>