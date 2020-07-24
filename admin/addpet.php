<?php
	include('includes/adminheader.php');
?>

<div id="wrapper">

	<?php include 'includes/adminnav.php';?>
	
		<div id="page-wrapper">
			<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add a new pet</h1>
						
							<?php
								if (isset($_POST['add'])) {
									$post_type = $_POST['type'];
									$post_name = $_POST['name'];
									$post_breed = $_POST['breed'];
									$post_age = $_POST['age'];
									$post_gender = $_POST['gender'];
									$post_size = $_POST['size'];
									$post_content = $_POST['content'];
									$post_status = 'available';
									
									$post_tag = "$post_type, $post_name, $post_breed, $post_age, $post_gender, $post_size";
	
									$image = $_FILES['image']['name'];
									$ext = $_FILES['image']['type'];
									$validExt = array ("image/gif",  "image/jpeg",  "image/pjpeg", "image/png");
    
									if ($_FILES['image']['size'] <= 0 || $_FILES['image']['size'] > 1024000 || !in_array($ext, $validExt)) {
										echo "<script>alert('Not a valid image')</script>";
									}
									else {
										$folder  = '../petpics/';
										$imgext = strtolower(pathinfo($image, PATHINFO_EXTENSION) );
										$picture = rand(1000 , 1000000) .'.'.$imgext;
										move_uploaded_file($_FILES['image']['tmp_name'], $folder.$picture);
	
										$query = "INSERT INTO pet (type,name,breed,age,gender,size,image,content,status,tag) VALUES ('$post_type' , '$post_name' , '$post_breed' , '$post_age' , '$post_gender' , '$post_size' , '$picture' , '$post_content' , '$post_status', '$post_tag') ";
										$result = mysqli_query($conn , $query) or die(mysqli_error($conn));
			
										if (mysqli_affected_rows($conn) > 0) {
											echo "<script>alert('New Pet Successfully Added!');
											window.location.href='pets.php';</script>";
										}
										else {
											"<script> alert('Error while adding, please try again!');</script>";
										}
									}
								}
							?>

						<form role="form" method="post" enctype="multipart/form-data">							
							<div class="input-group">
								<label for="post_type">Pet type</label>
								<select class="form-control" name="type" required>
									<?php
										if(isset($_POST['add'])) { 
											if($post_gender=='cat'){
												echo "<option value='$post_type'>Cat</option>";
												echo "<option value='Dog'>Dog</option>";
											}
											else{
												echo "<option value='$post_type'>Dog</option>";
												echo "<option value='Cat'>Cat</option>";
											}
										}
										else{
											echo "<option value=''>Select Type</option>";
											echo "<option value='Cat'>Cat</option>";
											echo "<option value='Dog'>Dog</option>";
										}
									?>
								</select>
							</div>
							
							<br>
							
							<div class="form-group">
								<label for="post_name">Pet name</label>
								<input type="text" name="name" placeholder="Enter name" value= "<?php if(isset($_POST['add'])) { echo $post_name; } ?>"  class="form-control" required>
							</div>
							
							<div class="form-group">
								<label for="post_breed">Pet breed</label>
								<input type="text" name="breed" placeholder="Enter breed" value= "<?php if(isset($_POST['add'])) { echo $post_breed; } ?>"  class="form-control" required>
							</div>
							
							<div class="form-group">
								<label for="post_age">Pet age</label>
								<input type="text" name="age" placeholder="Enter age" value= "<?php if(isset($_POST['add'])) { echo $post_age; } ?>"  class="form-control" required>
							</div>
							
							<div class="input-group">
								<label for="post_gender">Pet gender</label>
								<select class="form-control" name="gender" required>
									<?php
										if(isset($_POST['add'])) { 
											if($post_gender=='male'){
												echo "<option value='$post_gender'>Male</option>";
												echo "<option value='Female'>Female</option>";
											}
											else{
												echo "<option value='$post_gender'>Female</option>";
												echo "<option value='Male'>Male</option>";
											}
										}
										else{
											echo "<option value=''>Select Gender</option>";
											echo "<option value='Male'>Male</option>";
											echo "<option value='Female'>Female</option>";
										}
									?>
								</select>
							</div>
							
							<br>
							
							<div class="form-group">
								<label for="post_size">Pet size</label>
								<input type="text" name="size" placeholder = "Enter size " value= "<?php if(isset($_POST['add'])) { echo $post_size; } ?>"  class="form-control" required>
							</div>

							<div class="form-group">
								<label for="post_image">Pet Image</label><font color='brown'> &nbsp;&nbsp;(Allowed image size: 1024 KB)</font> 
								<input type="file" name="image" required>
							</div>

							<div class="form-group">
								<label for="post_content">Pet Content</label>
								<textarea class="form-control" name="content" cols="30" rows="15" ><?php if(isset($_POST['add'])) { echo $post_content; } ?></textarea>
							</div>

							<input type="submit" name="add" class="btn btn-primary" value="Add Pet">

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