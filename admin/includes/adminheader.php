<?php
	include('connection.php');
	session_start();
	
	if (!(isset($_SESSION['username']))) {
		echo "<script>alert('You need to login first');
		window.location.href='../signin2.php';</script>";
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>PetShelter Dashboard - <?php echo $_SESSION['username']; ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/sb-admin.css">
		<script src="js/tinymce/tinymce.min.js"></script>
		<script src="js/tinymce/script.js"></script>		
	</head>
	
	<body style='overflow-x: hidden; background: white'>	