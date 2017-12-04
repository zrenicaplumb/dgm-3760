 <?php
	require_once('variables.php');
	if (isset($_POST['submit'])) {
		$dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die('Connection failed.');
		$firstname = mysqli_real_escape_string($dbconnection, trim($_POST['firstname']));
		$lastname = mysqli_real_escape_string($dbconnection, trim($_POST['lastname']));
		$username = mysqli_real_escape_string($dbconnection, trim($_POST['username'])) ;
		$password = mysqli_real_escape_string($dbconnection, trim($_POST['password'])) ;

		if(!empty($username) && !empty($password)){
			$query = "SELECT * FROM a7cookies WHERE username = '$username'";
			$alreadyexists = mysqli_query($dbconnection, $query) or die('Query failed.');
			if (mysqli_num_rows($alreadyexists) == 0) {
				$query = "INSERT INTO a7cookies (firstname, lastname, username, password) VALUES ('$firstname','$lastname', '$username', '$password') ";
				mysqli_query($dbconnection, $query) or die('Insert query failed.');
				echo '<p>Your account has been created!</p>';
				echo '<br><a href="login.php">Go to login page</a>';
				mysqli_close($dbconnection);
				exit();
			}
			else{
				echo '<p class="error">An account already exists with this username, use a different username.';
				echo '<br><a href="create.php">Return to create account</a>';
			}
		}
		
	}
	
 ?>

<?php require_once('head.php'); ?>
<body>
	<header>
		
	</header>

	<form action="create.php" method="POST" enctype="multipart/form-data">
		<h2>Create an Account</h2>
		<input type="text" name="firstname" placeholder="First Name" required>
		<input type="text" name="lastname" placeholder="Last Name" required>
		<input type="text" name="username" placeholder="Username" required>
		<input type="password" name="password" placeholder="Password" required>
		<button type="submit" name="submit">Create</button>
		<a href="login.php">Log in</a>
	</form>
</body>
</html>