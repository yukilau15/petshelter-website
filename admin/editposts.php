<?php
	include 'includes/connection.php';
	include 'includes/adminheader.php';
	
	if (isset($_GET['id'])) {
		$id = mysqli_real_escape_string($conn, $_GET['id']);  
	}
	else {
		header('location:posts.php');
	}

	$query = "SELECT * FROM post WHERE Pos_ID='$id'";
	$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
	
	if (mysqli_num_rows($run_query) > 0 ) {
		while ($row = mysqli_fetch_array($run_query)) {
			$post_title = $row['Title'];
			$post_id = $row['Pos_ID'];
			$post_author = $row['Author'];
			$post_date = $row['Postdate'];
			$post_image = $row['Image'];
			$post_content = $row['Content'];
			$post_tags = $row['Tag'];
			$post_status = $row['Status'];
					
			if (isset($_POST['update'])) {
				$post_title = $_POST['title'];
				$post_tag = $_POST['tags'];
				$post_content = $_POST['content'];
				$post_author = $_SESSION['username'];
				$post_date = date('Y-m-d');
				$post_status = $_POST['status'];
	
				$image = $_FILES['image']['name'];
				$ext = $_FILES['image']['type'];
				$validExt = array ("image/gif",  "image/jpeg",  "image/pjpeg", "image/png");
				
				if (empty($image)) {
					$picture = $post_image;
				}
				else if ($_FILES['image']['size'] <= 0 || $_FILES['image']['size'] > 1024000 || !in_array($ext, $validExt)) {
					echo "<script>alert('Not a valid image');
					window.location.href = 'editposts.php?id=$id';</script>";	
					
					$picture = $post_image;
				}
				else {
					$folder  = '../postpics/';
					$imgext = strtolower(pathinfo($image, PATHINFO_EXTENSION) );
					$picture = rand(1000 , 1000000) .'.'.$imgext;
					move_uploaded_file($_FILES['image']['tmp_name'], $folder.$picture);
				}
				
				$queryupdate = "UPDATE post SET title = '$post_title' , tag = '$post_tag' , content='$post_content' , 	status = '$post_status' , image = '$picture' , postdate = '$post_date' WHERE Pos_ID= '$id' " ;
				$result = mysqli_query($conn , $queryupdate) or die(mysqli_error($conn));
					
				if (mysqli_affected_rows($conn) > 0) {
					echo "<script> alert('Post updated successfully.');
					window.location.href='posts.php';</script>";
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
                        <h1 class="page-header">Update post</h1>
						
                        <form role="form" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="post_title">Post Title</label>
								<input type="text" name="title" class="form-control" value="<?php echo $post_title; ?>" required>
							</div>
												
							<div class="input-group">
								<label for="post_status">Post status</label>
								<select class="form-control" name="status" required>
									<?php
										if($post_status=='published'){
											echo "<option value='$post_status'>Publish</option>";
											echo "<option value='draft'>Draft</option>";
										}
										else{
											echo "<option value='$post_status'>Draft</option>";
											echo "<option value='draft'>Publish</option>";
										}
									?>
								</select>
							</div>
							
							<br>

							<div class="form-group">
								<label for="post_image">Post Image</label>
								<img class="img-responsive" width="200" src="../postpics/<?php echo $post_image; ?>" alt="Photo">
								<input type="file" name="image"> 
							</div>
							
							<div class="form-group">
								<label for="post_tags">Post Tags</label>
								<input type="text" name="tags" class="form-control" value="<?php echo  $post_tags; ?>" required>
							</div>
							
							<div class="form-group">
								<label for="post_content">Post Content</label>
								<textarea  class="form-control" name="content" id="" cols="30" rows="10"><?php  echo $post_content; ?></textarea>
								</textarea>
							</div>

							<button type="submit" name="update" class="btn btn-primary" value="Update Post">Update Post</button>
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