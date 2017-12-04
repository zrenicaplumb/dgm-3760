



<?php require_once('head.php'); ?>
<?php
	require_once('variables.php');
	if (isset($_POST['submit'])) {
		$dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die('Connection failed.');
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$password2 = trim($_POST['password2']);
		if(!empty($username) && !empty($password) && !empty($password2) && $password == $password2){
			
			$query = "SELECT * FROM a7cookies WHERE username = '$username' ";

		
			$result = mysqli_query($dbconnection, $query) or die('Query failed.');
			if (mysqli_num_rows($result) == 1) {
				
				$row = mysqli_fetch_array($result);
				setcookie('username', $row['username'], time() + (60*60*24*30));
				setcookie('firstname', $row['firstname'], time() + (60*60*24*30));
				setcookie('lastname', $row['lastname'], time() + (60*60*24*30));
				
				header('Location: index.php');
			}
			else{
				echo '<p class="not-found">Could not find account for '.' " '.$_POST['username'].' " '.'.</p>';
				

			}
		
		// $query = "INSERT INTO todo_list_users (username, password) VALUES ('$username','$password')";
		
	}
}
 ?>
<body>
	<header>
		
	</header>
	
	<form action="login.php" method="POST" enctype="multipart/form-data">
		<h2>Login</h2>
		<input type="text" name="username" placeholder="Username" required>
		<input type="text" name="password" placeholder="Password" required>
		<input type="text" name="password2" placeholder="Password re-check" required>
		<!-- <p class="not-found">Account not found, please try again.</p> -->
		<button type="submit" name="submit">Log in</button>
		<a href="create.php">Create an account</a>
	</form>
</body>
</html>