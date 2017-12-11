<?php require_once('head.php'); ?>
<body>
	<div id="login-page">
		<div class="wrap">
			<?php require_once('header.php') ?>
			<?php
				require_once('variables.php');
				$dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die('Connection failed.');
				if (isset($_POST['submit'])) {
					$username = $_POST['username'];
					$password = $_POST['password'];
					if(!empty($username) && !empty($password)){
						$query = "SELECT * FROM a10users WHERE username = '$username'";
						$result = mysqli_query($dbconnection, $query) or die('Query failed.');
						if (mysqli_num_rows($result) == 1) {
							
							$row = mysqli_fetch_array($result);
							setcookie('username', $row['username'], time() + (60*60*24*30));
							
							
							// header('Location: index.php');
						}
						else{
							echo '<p class="not-found">Could not find account for '.' " '.$_POST['username'].' " '.'.</p>';
							

						}
			}
		}
			 ?>
		
			<div class="container">
				
				<form action="login.php" method="POST" enctype="multipart/form-data">
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