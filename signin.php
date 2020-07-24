<?php
function signin(){
	// Create connection
	$conn = new mysqli("localhost", "root", "", "petshelter_db");
	
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	if(isset($_POST["submitLogin"])){
		$type=$_POST["type"];
		$username=$_POST["username"];
		$password=$_POST["pass"];
		
		mysqli_real_escape_string($conn, $type);
		mysqli_real_escape_string($conn, $username);
		mysqli_real_escape_string($conn, $password);
		
		$query = "SELECT * FROM account WHERE username = '$username'";
		$result = mysqli_query($conn , $query) or die (mysqli_error($conn));
		
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_array($result)) {
				$id = $row['Acc_ID'];
				$type= $row['Type'];
				$user = $row['Username'];
				$pass = $row['Password'];
			
				if (password_verify($password, $pass)) {
					session_start();
					$_SESSION["login"]=1;
					$_SESSION['username']=$username;
				
					if($type=="user")
						header("Location: index.php");
					else
						header("Location: admin/index.php");
				}
				else {
					echo"<script>alert('Wrong User Type, Username or Password.')</script>";	
				}
			}
		}
	}
	else {
		$type=NULL;
		$username=NULL;
		$password=NULL;
	}
}
?>