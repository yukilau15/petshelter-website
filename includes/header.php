<header class="site-navbar py-4 js-sticky-header site-navbar-target" id="myNav">
	<div class="container-fluid">
		<div class="d-flex align-items-center">
			<div class="site-logo mr-auto w-25">
				<a href="index.php">PetShelter</a>
			</div>
			
			<div class="mx-auto text-center">
				<nav class="site-navigation position-relative text-right" role="navigation">
					<ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="pet.php">Pet</a></li>
						<li><a href="blog.php" class="nav-link">Blog</a></li>
						<li><a href="contact.php" class="nav-link">Contact</a></li>
					</ul>
				</nav>
			</div>
			
			<div class="ml-auto w-25">
				<nav class="site-navigation position-relative text-right" role="navigation">
					<ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
						<?php
							if(isset($_SESSION['username'])){
								echo '<li class="cta"><a href="signout.php" onclick="destroySession()"><span>';
								echo $_SESSION['username'];
								echo "</span></a></li>";
							}
							else{
								echo '<li class="cta"><a href="signin2.php" onclick="destroySession()"><span>';
								echo "Login / Signup";
								echo "</span></a></li>";
							}
						?>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>