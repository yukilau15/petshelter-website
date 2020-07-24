<?php
function subscribeus(){
	// Create connection
	$conn = new mysqli("localhost", "root", "", "petshelter_db");
	
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	if(isset($_POST["submitSubscribe"])){
		$post_email=$_POST["email"];
		
		mysqli_real_escape_string($conn, $post_email);
		
		$query = "SELECT * FROM subscribe WHERE Email = '$post_email'";
		$search_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($search_query);
		
		if ($count != 0) {
			echo"<script>alert('You have already subscribed!')</script>";
		}
		else{
			$sql="INSERT INTO `subscribe`(`Email`) VALUES ('$post_email')";
			mysqli_query($conn,$sql);
			echo"<script>alert('Subscribe Sucessful!')</script>";	
		}			 
	}
	else {
		$post_email=NULL;
	}
}
?>