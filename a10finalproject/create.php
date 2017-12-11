<?php require_once('head.php'); ?>
<body>
	<div id="create-page">
		<div class="wrap">
			<?php require_once('header.php') ?>
			
			<div class="container">
				
				<form action="create2.php" method="POST" enctype="multipart/form-data">
					<h2>Create Account</h2>
					<input type="text" name="username" required value placeholder="Username">
					<input type="password" name="password" required value placeholder="Password">
					<button type="submit" name="submit">Create</button>
					<a href="login.php">Log in</a>
					<a href="authorize.php">Login as Administrator</a>
				</form>
			</div>
		</div>  
		
	</div>
	<?php require_once('footer.php');?>
</body>
</html>