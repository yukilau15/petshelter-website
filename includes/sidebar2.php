<div class="col-lg-4 pl-lg-5">

	<div class="mb-5 text-center border rounded course-instructor">

		<form class="form-group border-bottom pb-3" method="post" action="searchPet.php">
			<div class="input-group">
				<input type="text" name="search" class="form-control" placeholder="Search Pets" required>
				<button type="submit" name="submit" class="btn btn-primary">
					<span class="icon icon-search"></span>
				</button>
			</div>
		</form>

		<div class="mb-4 text-center border-bottom pb-3">
			<img src="images/person_7.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">  

			<h4 class="text-black">Jill Vega</h4>
			<p>Shelter and Rescue Sign Up Administrator</p>
			<a href="https://www.facebook.com/"><span class="icon-facebook-square">&nbsp;</span></a>
			<a href="https://twitter.com/"><span class="icon-twitter-square">&nbsp;</span></a>
			<a href="https://www.linkedin.com/"><span class="icon-linkedin-square">&nbsp;</span></a>
		</div>
		
		<div class="text-left"> 
			<h4 class="title">Featured Pets</h4>
			
				<?php
					$query = "SELECT * FROM pet WHERE Status='available' ORDER BY RAND() LIMIT 4";
					$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));

					if (mysqli_num_rows($run_query) > 0) {
						while ($row = mysqli_fetch_assoc($run_query)) {
							$post_id = $row['Pet_ID'];
							$post_image = $row['Image'];
							$post_type = $row['Type'];
							$post_name = $row['Name'];
							$post_breed = $row['Breed'];
							$post_age = $row['Age'];
							$post_gender = $row['Gender'];
							$post_size = $row['Size'];
							$post_content = $row['Content'];
							$post_status = $row['Status'];
							$post_tags = $row['Tag'];
							
							if ($post_status !== 'available') {
								echo "<h6><a href='#'>No Pets Yet</a></h6>";
							}
							else {
						?>
			
			<div class="popular-post-list border-dotted">
				<div class="details">
					<h6><a href="pet_single.php?post=<?php echo $post_id; ?>"><?php echo $post_name; ?> - <?php echo $post_breed; ?></a></h6>
				</div>
			</div>
			
			<?php }}} ?>
				
		</div>

	</div>

</div>