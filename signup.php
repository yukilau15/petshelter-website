<?php
function signup() {
	// Create connection
	$conn = new mysqli("localhost", "root", "", "petshelter_db");
	
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	if(isset($_POST["submit"])){
		$type=Null;
		$username=$_POST['username'];
		$email=$_POST['email'];
		$pass = $_POST['pass'];
		$password = password_hash("$pass" , PASSWORD_DEFAULT);
		
		$query=mysqli_query($conn,"SELECT * FROM `account` WHERE `Username`='$username'");
		
		if(mysqli_num_rows($query)>0){
			echo"<script>alert('Username Taken')</script>";
		}
		else {
			if($type==NULL)
				$type="user";
			
			$sql="INSERT INTO `account`(`Type`, `Username`, `Email`, `Password`) VALUES ('$type','$username','$email','$password')";
			
			mysqli_query($conn,$sql);
			header("Location: signin2.php?success=1");
		}	 
	}
	else {
		$username=NULL;
		$email=NULL;
		$password=NULL;
	}
}