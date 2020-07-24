<header class="navbar navbar-inverse navbar-fixed-top" role="navigation">        
    <div class="navbar-header">        
        <a class="navbar-brand" href="index.php">PetShelter Dashboard</a>
    </div>
            
    <ul class="nav navbar-right top-nav">
        <li><a href="../index.php">VISIT SITE</a></li>
		
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['username']; ?> <b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li>
					<a href="./index.php?section=<?php echo $_SESSION['username']; ?>"></i> Dashboard</a>
                </li>
				<li>
					<a href="./profile.php?section=<?php echo $_SESSION['username']; ?>"></i> Profile</a>
                </li>
				
				<li class="divider"></li>
				
				<li>
					<a href="../signout.php"></i> Log Out</a>
                </li>
			</ul>
        </li>
    </ul>

	<div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="index.php" class="active"></i> Dashboard</a>
            </li>
			
			<li>
                <a href="./subscribers.php">Subscribers</a>
            </li>
			
			<li>
                <a href="./messages.php">Messages</a>
            </li>

            <li>
                <a href="javascript:;" class="dropdown-toggle" data-toggle="collapse" data-target="#posts">Posts <b class="caret"></b></a>
                <ul id="posts" class="collapse">
					<li>
						<a href="./posts.php">View All Posts</a>
                    </li>
                    <li>
                        <a href="./publishnews.php">Add New Post</a>
                    </li>
                </ul>
			</li>
			
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#user">Users <b class="caret"></b></a>
                <ul id="user" class="collapse">
					<li>
						<a href="./users.php">View All Users</a>
					</li>
					<li>
						<a href="adduser.php">Add New User</a>
					</li>
				</ul>
            </li>
			
			<li>
                <a href="javascript:;" data-toggle="collapse" data-target="#pet">Pets <b class="caret"></b></a>
                <ul id="pet" class="collapse">
					<li>
						<a href="./pets.php">View All Pets</a>
					</li>
					<li>
						<a href="addpet.php">Add New Pet</a>
					</li>
				</ul>
			</li>
			
            <li>
                <a href="./profile.php?section=<?php echo $_SESSION['username']; ?>">Profile</a>
            </li>
        </ul>
    </div>
</header>