<?php
	include 'includes/connection.php';
	include 'includes/adminheader.php';

	if (isset($_GET['id'])) {
		$id = mysqli_real_escape_string($conn, $_GET['id']);  
	}
	else {
		header('location:pets.php');
	}

	$query = "SELECT * FROM pet WHERE Pet_ID='$id'";
	$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
	
	if (mysqli_num_rows($run_query) > 0 ) {
		while ($row = mysqli_fetch_array($run_query)) {
			$post_id = $row['Pet_ID'];
			$post_type = $row['Type'];
			$post_name = $row['Name'];
			$post_breed = $row['Breed'];
			$post_age = $row['Age'];
			$post_gender = $row['Gender'];
			$post_size = $row['Size'];
			$post_image = $row['Image'];
			$post_content = $row['Content'];
			$post_status = $row['Status'];
			$post_tag = $row['Tag'];
					
			if (isset($_POST['update'])) {
				$post_type = $_POST['type'];
				$post_name = $_POST['name'];
				$post_breed = $_POST['breed'];
				$post_age = $_POST['age'];
				$post_gender = $_POST['gender'];
				$post_size = $_POST['size'];
				$post_content = $_POST['content'];
				$post_status = $_POST['status'];
				
				$post_tag = "$post_type, $post_name, $post_breed, $post_age, $post_gender, $post_size";
	
				$image = $_FILES['image']['name'];
				$ext = $_FILES['image']['type'];
				$validExt = array ("image/gif",  "image/jpeg",  "image/pjpeg", "image/png");
    
				if (empty($image)) {
					$picture = $post_image;
				}
				else if ($_FILES['image']['size'] <= 0 || $_FILES['image']['size'] > 1024000 || !in_array($ext, $validExt)) {
					echo "<script>alert('Not a valid image');
					window.location.href = 'editpets.php?id=$id';</script>";
					
					$picture = $post_image;
				}
				else {
					$folder  = '../petpics/';
					$imgext = strtolower(pathinfo($image, PATHINFO_EXTENSION) );
					$picture = rand(1000 , 1000000) .'.'.$imgext;
					move_uploaded_file($_FILES['image']['tmp_name'], $folder.$picture);
				}
				
				$queryupdate = "UPDATE pet SET type = '$post_type' , name = '$post_name' , breed = '$post_breed', age = '$post_age', gender = '$post_gender', size = '$post_size', image = '$picture', content='$post_content' , status = '$post_status' , tag = '$post_tag' WHERE Pet_ID= '$id' " ;
				$result = mysqli_query($conn , $queryupdate) or die(mysqli_error($conn));
					
				if (mysqli_affected_rows($conn) > 0) {
					echo "<script> alert('Pet updated successfully.');
					window.location.href='pets.php';</script>";
				}
				else {
					"<script> alert('Error while updating, please try again!');</script>";
				}	
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
                        <h1 class="page-header">Update pet</h1>
						
						<form role="form" method="post" enctype="multipart/form-data">							
							<div class="input-group">
								<label for="post_type">Pet type</label>
								<select class="form-control" name="type" required>
									<?php
										if($post_type=='Cat'){
											echo "<option value='$post_type'>Cat</option>";
											echo "<option value='Dog'>Dog</option>";
										}
										else{
											echo "<option value='$post_type'>Dog</option>";
											echo "<option value='Cat'>Cat</option>";
										}
									?>
								</select>
							</div>
							
							<br>
							
							<div class="form-group">
								<label for="post_name">Pet name</label>
								<input type="text" name="name" placeholder="Enter name" value= "<?php echo $post_name; ?>"  class="form-control" required>
							</div>
							
							<div class="form-group">
								<label for="post_breed">Pet breed</label>
								<input type="text" name="breed" placeholder="Enter breed" value= "<?php echo $post_breed; ?>"  class="form-control" required>
							</div>
							
							<div class="form-group">
								<label for="post_age">Pet age</label>
								<input type="text" name="age" placeholder="Enter age" value= "<?php echo $post_age; ?>"  class="form-control" required>
							</div>
							
							<div class="input-group">
								<label for="post_gender">Pet gender</label>
								<select class="form-control" name="gender" required>
									<?php
										if($post_gender=='Male'){
											echo "<option value='$post_gender'>Male</option>";
											echo "<option value='Female'>Female</option>";
										}
										else{
											echo "<option value='$post_gender'>Female</option>";
											echo "<option value='Male'>Male</option>";
										}
									?>
								</select>
							</div>
							
							<br>
							
							<div class="form-group">
								<label for="post_size">Pet size</label>
								<input type="text" name="size" placeholder = "Enter size " value= "<?php echo $post_size; ?>"  class="form-control" required>
							</div>
							
							<div class="input-group">
								<label for="post_status">Pet status</label>
								<select class="form-control" name="status" required>
									<?php
										if($post_status=='adopted'){
											echo "<option value='$post_status'>Adopt</option>";
											echo "<option value='available'>Available</option>";
										}
										else{
											echo "<option value='$post_status'>Available</option>";
											echo "<option value='adopted'>Adopt</option>";
										}
									?>
								</select>
							</div>
								
							<br>

							<div class="form-group">
								<label for="post_image">Pet Image</label>
								<img class="img-responsive" width="200" src="../petpics/<?php echo $post_image; ?>" alt="Photo">
								<input type="file" name="image"> 
							</div>
							
							<div class="form-group">
								<label for="post_content">Pet Content</label>
								<textarea class="form-control" name="content" cols="30" rows="15" ><?php echo $post_content; ?></textarea>
							</div>

							<input type="submit" name="update" class="btn btn-primary" value="Edit Pet">
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