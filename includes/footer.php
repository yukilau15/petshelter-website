<?php	
	include("subscribe_process.php");
	subscribeus();
?>
<footer class="footer-section bg-white">
    <div class="container">
        <div class="row">
		
        <div class="col-md-4">
            <h3>About PetShelter</h3>
			<p>PetShelter is made up of animal-care professionals and regular people volunteering for their local animal welfare organizations all working together to maintain active and accurate homeless pet lists.</p>
		 </div>

        <div class="col-md-3 ml-auto">
            <h3>Links</h3>
            <ul class="list-unstyled footer-links">
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="blog.php">Blog</a></li>
				<li><a href="contact.php">Contact</a></li>
            </ul>
         </div>

         <div class="col-md-4">
            <h3>Subscribe</h3>
			<p>To get the latest on pet adoption and pet care, sign up for the PetShelter newsletter.</p>
			
            <form action="" method="post">
				<div class="d-flex mb-5">
					<input type="email" name="email" class="form-control rounded-0" placeholder="Email" required>
					<input type="submit" name="submitSubscribe" class="footer-subscribe btn btn-primary rounded-0" value="Subscribe">
              </div>
            </form>
         </div>

        </div>

        <div class="row pt-5 mt-5 text-center">
			<div class="col-md-12">
				<div class="border-top pt-5">
					<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> <a href="#">PetShelter</a> - All rights reserved</p>
				</div>
			</div>
        </div>
		
    </div>
</footer>
