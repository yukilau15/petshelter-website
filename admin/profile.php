<?php
	include ('includes/connection.php');
	include ('includes/adminheader.php');

	if (isset($_SESSION['username'])) {
		$username = $_SESSION['username'];
		
		$query = "SELECT * FROM account WHERE Username = '$username'" ; 
		$result= mysqli_query($conn , $query) or die (mysqli_error($conn));
		
		if (mysqli_num_rows($result) > 0 ) {
			$row = mysqli_fetch_array($result);
			$userid = $row['Acc_ID'];
			$usernm = $row['Username'];
			$userpassword = $row['Password'];
			$useremail = $row['Email'];
		}

		if (isset($_POST['update'])) {
			if (password_verify($_POST['currentpassword'], $userpassword)) {
				if (empty($_POST['newpassword'])) {
					  $useremail = $_POST['email'];
					  $updatequery1 = "UPDATE account SET email='$useremail' WHERE Acc_id = '$userid' " ;
					  $result2 = mysqli_query($conn , $updatequery1) or die(mysqli_error($conn));
					  
					if (mysqli_affected_rows($conn) > 0) {
						echo "<script>alert('Profile updated successfully.');</script>";
					}
					else {
						echo "<script>alert('An error occured, Please try again!');</script>";
					}
				}
				else if (isset($_POST['newpassword']) &&  ($_POST['newpassword'] !== $_POST['confirmnewpassword'])) {
					echo  "<div style='background: white; padding: 20px 250px 0px;'><font color='red'>New password and Confirm New password do not match</font></div>";
				}
				else {
					$useremail = $_POST['email'];
					$pass = $_POST['newpassword'];
					$userpassword = password_hash("$pass" , PASSWORD_DEFAULT);

					$updatequery = "UPDATE account SET password = '$userpassword', Username='$username' , email= '$useremail' WHERE Acc_ID='$userid'";
					$result1 = mysqli_query($conn , $updatequery) or die(mysqli_error($conn));
					
					if (mysqli_affected_rows($conn) > 0) {
						echo "<script>alert('Profile updated successfully.');</script>";
					}
					else {
						echo "<script>alert('An error occured, Please try again!');</script>";
					}
				}
			}
			else {
				echo "<div style='background: white; padding: 20px 250px 0px;'><font color='red'>Wrong password</font></div>";
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
						<h1>
                            Welcome to your Profile 
                            <small><?php echo $_SESSION['username']; ?></small>
                        </h1>
						
						<form role="form" method="post" enctype="multipart/form-data">	

						<div class="form-group">
							<label for="user_title">User Name</label>
							<input type="text" name="username" class="form-control" value="<?php echo $username; ?>" readonly>
						</div>

						<div class="form-group">
							<label for="user_tag">Email</label>
							<input type="email" name="email" class="form-control" value="<?php echo $useremail; ?>" placeholder="Enter email" required>
						</div>
						
						<div class="form-group">
							<label for="usertag">Current Password</label>
							<input type="password" name="currentpassword" class="form-control" placeholder="Enter current password" required>
						</div>
						
						<div class="form-group">
							<label for="usertag">New Password <font color='brown'> (changing password is optional)</font></label>
							<input type="password" name="newpassword" class="form-control" placeholder="Enter new password">
						</div>
						
						<div class="form-group">
							<label for="usertag">Confirm New Password</label>
							<input type="password" name="confirmnewpassword" class="form-control" placeholder="Re-enter new password" >
						</div>
						
						<hr>
						
						<button type="submit" name="update" class="btn btn-primary" value="Update User">Update User</button>

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