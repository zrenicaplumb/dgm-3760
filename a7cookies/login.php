<?php
	require_once('variables.php');
	if (isset($_POST['submit'])) {
		$dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die('Connection failed.');
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		if(!empty($username) && !empty($password)){
			
			$query = "SELECT * FROM todo_list_users WHERE username = '$username' ";
			$result = mysqli_query($dbconnection, $query) or die('Query failed.');
			if (mysqli_num_rows($result) == 1) {
				
				$row = mysqli_fetch_array($result);
				setcookie('username', $row['username'], time() + (60*60*24*30));
				setcookie('password', $row['password'], time() + (60*60*24*30));
				header('Location: index.php');
			}
			else{
				echo '<p class="not-found">Could not find account for '.' " '.$_POST['username'].' " '.'.</p>';
				

			}
		
		// $query = "INSERT INTO todo_list_users (username, password) VALUES ('$username','$password')";
		
	}
}
 ?>

<?php require_once('head.php'); ?>
<body>
	<header>
		
	</header>
	
	<form action="login.php" method="POST" enctype="multipart/form-data">
		<h2>Login</h2>
		<input type="text" name="username" placeholder="Username" required>
		<input type="text" name="password" placeholder="Password" required>
		<input type="text" name="password" placeholder="Password re-check" required>
		<!-- <p class="not-found">Account not found, please try again.</p> -->
		<button type="submit" name="submit">Log in</button>
		<a href="create.php">Create an account</a>
	</form>
</body>
</html>