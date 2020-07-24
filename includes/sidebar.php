<div class="col-lg-4 pl-lg-5">

	<div class="mb-5 text-center border rounded course-instructor">

		<form class="form-group border-bottom pb-3" method="post" action="searchPost.php">
			<div class="input-group">
				<input type="text" name="search" class="form-control" placeholder="Search Posts" required>
				<button type="submit" name="submit" class="btn btn-primary">
					<span class="icon icon-search"></span>
				</button>
			</div>
		</form>

		<div class="mb-4 text-center border-bottom pb-3">
			<img src="images/person_8.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">  

			<h4 class="text-black">Tim Murphy</h4>
			<p>Senior Blog Writer</p>
			<a href="https://www.facebook.com/" target="_blank><span class="icon-facebook-square">&nbsp;</span></a>
			<a href="https://twitter.com/" target="_blank><span class="icon-twitter-square">&nbsp;</span></a>
			<a href="https://www.linkedin.com/" target="_blank><span class="icon-linkedin-square">&nbsp;</span></a>
		</div>

		<div class="text-left"> 
			<h4 class="title">Recent Posts</h4>
			
				<?php
					$query = "SELECT * FROM post WHERE Status='published' ORDER BY Updated DESC LIMIT 4";
					$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));

					if (mysqli_num_rows($run_query) > 0) {
						while ($row = mysqli_fetch_assoc($run_query)) {
							$post_id = $row['Pos_ID'];
							$post_title = $row['Title'];
							$post_author = $row['Author'];
							$post_date = $row['Postdate'];
							$post_image = $row['Image'];
							$post_content = $row['Content'];
							$post_status = $row['Status'];
							$post_tags = $row['Tag'];
									
							if ($post_status !== 'published') {
								echo "<h6><a href='#'>No Posts Yet</a></h6>";
							}
							else {
						?>
			
			<div class="popular-post-list border-dotted">
				<div class="details">
					<h6><a href="blog_single.php?post=<?php echo $post_id; ?>"><?php echo $post_title; ?></a></h6>
				</div>
			</div>
			
			<?php }}} ?>
				
		</div>

	</div>

</div>
