<?php
	session_start();
	include('includes/connection.php');
	include("signin.php");
	signin();
	
	if(isset($_GET["success"])&& $_GET["success"]==1){
		echo"<script>alert('Sign Up sucessful!')</script>";
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>PetShelter - Log In</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
		<link rel="stylesheet" href="fonts/icomoon/style.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/jquery-ui.css">
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">
		<link rel="stylesheet" href="css/jquery.fancybox.min.css">
		<link rel="stylesheet" href="css/bootstrap-datepicker.css">
		<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
		<link rel="stylesheet" href="css/aos.css">
		<link rel="stylesheet" href="css/style.css">
    
		<!-- Style -->
		<?php include('includes/style.php');?>
		<!-- Style End -->
	</head>
	
	<body style='overflow-x: hidden;'>	
		<div class="slide-1">
			<div class="container">
				<div class="col-lg-5 pt-5 ml-auto mr-auto" data-aos="fade-up" data-aos-delay="500">
					<form action="" method="post" class="form-box text-center">
						<h3 class="h4 text-black mb-4">Log In</h3>
						
						<div class="form-group">
							<select name="type" class="form-control" required>
								<option value="">Select User Type</option>
								<option value="admin">admin</option>
								<option value="user">user</option>
							</select>
						</div>
						
						<div class="form-group">
							<input type="text" name="username" class="form-control" placeholder="Username" required>
						</div>
						
						<div class="form-group">
							<input type="password" id="pass-field" name="pass" class="form-control" placeholder="Password" required>
						</div>
						
						<div class="form-group mb-4" style="text-align:left;">
							<input type="checkbox" onclick="viewPassword()" > Show Password
						</div>
						
						<script>
						function viewPassword(){
							var passInput = document.getElementById('pass-field');
								
							if (passInput.type == "password")
								passInput.type = "text";
							else
								passInput.type = "password";
						}
						</script>
						
						<div class="form-group">
							<input type="submit" name="submitLogin" class="btn btn-primary btn-block btn-pill" value="Log In">
						</div>
						
						<div>
							<span>Need an account?</span>
						</div>
						
						<div>
							<a href="signup2.php">Sign up</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/jquery-migrate-3.0.1.min.js"></script>
		<script src="js/jquery-ui.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/jquery.countdown.min.js"></script>
		<script src="js/bootstrap-datepicker.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/aos.js"></script>
		<script src="js/jquery.fancybox.min.js"></script>
		<script src="js/jquery.sticky.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>