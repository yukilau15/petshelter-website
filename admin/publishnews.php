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
                        <h1 class="page-header">Add a new post</h1>

							<?php
								if (isset($_POST['publish'])) {
									$post_title = $_POST['title'];
									$post_tag = $_POST['tags'];
									$post_content = $_POST['content'];
									$post_author = $_SESSION['username'];
									$post_date = date('Y-m-d');
									$post_status = 'draft';
	
									$image = $_FILES['image']['name'];
									$ext = $_FILES['image']['type'];
									$validExt = array ("image/gif",  "image/jpeg",  "image/pjpeg", "image/png");
    
									if ($_FILES['image']['size'] <= 0 || $_FILES['image']['size'] > 1024000 || !in_array($ext, $validExt)) {
										echo "<script>alert('Not a valid image')</script>";
									}
									else {
										$folder  = '../postpics/';
										$imgext = strtolower(pathinfo($image, PATHINFO_EXTENSION) );
										$picture = rand(1000 , 1000000) .'.'.$imgext;
										move_uploaded_file($_FILES['image']['tmp_name'], $folder.$picture);
									
										$query = "INSERT INTO post (title,author,postdate,image,content,status,tag) VALUES ('$post_title' , '$post_author' , '$post_date' , '$picture' , '$post_content' , '$post_status', '$post_tag') ";
										$result = mysqli_query($conn , $query) or die(mysqli_error($conn));
			
			
										if (mysqli_affected_rows($conn) > 0) {
											echo "<script> alert('News posted successfully. It will be published after approved!');
											window.location.href='posts.php';</script>";
										}
										else {
											"<script> alert('Error while posting, please try again!');</script>";
										}
									}
								}
							?>

						<form role="form" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="post_title">Post Title</label>
								<input type="text" name="title" placeholder="Enter title" value= "<?php if(isset($_POST['publish'])) { echo $post_title; } ?>"  class="form-control" required>
							</div>

							<div class="form-group">
								<label for="post_image">Post Image</label> <font color='brown'> &nbsp;&nbsp;(Allowed image size: 1024 KB)</font> 
								<input type="file" name="image" required>
							</div>

							<div class="form-group">
								<label for="post_tag">Post Tags</label>
								<input type="text" name="tags" placeholder="Enter some tags seperated by comma(,)" value= "<?php if(isset($_POST['publish'])) { echo $post_tag; } ?>" class="form-control">
							</div>

							<div class="form-group">
								<label for="post_content">Post Content</label>
								<textarea class="form-control" name="content" cols="30" rows="15"><?php if(isset($_POST['publish'])) { echo $post_content; } ?></textarea>
							</div>

							<input type="submit" name="publish" class="btn btn-primary" value="Publish Post">
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