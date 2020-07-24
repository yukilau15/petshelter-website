<?php
function contactus(){
	// Create connection
	$conn = new mysqli("localhost", "root", "", "petshelter_db");
	
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	if(isset($_POST["submitMessage"])){
		$fname=$_POST["fname"];
		$lname=$_POST["lname"];
		$subject=$_POST["subject"];
		$email=$_POST["email"];
		$message=$_POST["message"];
		
		$query=mysqli_query($conn,"SELECT * FROM `contact`");
			
		$sql="INSERT INTO `contact`(`Fname`, `Lname`, `Subject`, `Email`, `Message`) VALUES ('$fname','$lname','$subject','$email','$message')";
			
		mysqli_query($conn,$sql);
		echo"<script>alert('Send Sucessful!')</script>";	
			 
	}
	else {
		$fname=NULL;
		$lname=NULL;
		$subject=NULL;
		$email=NULL;
		$message=NULL;
	}
}
?>