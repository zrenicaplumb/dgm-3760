<?php require_once('head.php'); ?>
<body>
	<div id="login-page">
		<div class="wrap">
			<?php require_once('header.php') ?>
			<div class="row">
				<!-- <div class="col-xs-12 col-sm-6 col-md-4">
					
				</div> -->
			</div>
			<div class="container">
				
				<form action="login2.php" method="POST" enctype="multipart/form-data">
					<h2>login</h2>
					<input type="text" name="username" required value placeholder="Email">
					<input type="password" name="password"  required value placeholder="Password">
					<button type="submit" name="submit">Login</button>
					<a href="create.php">Create an Account</a>
					<a href="edit.php">Login as Administrator</a>

				</form>
			</div>
		</div>  
		
	</div>
	<?php require_once('footer.php');?>
</body>
</html>