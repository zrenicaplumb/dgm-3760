<?php
	require_once('variables.php');
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		if(!empty($username) && !empty($password)){
			$query = "SELECT * FROM a10users WHERE username = '$username'";
			$alreadyexists = mysqli_query($dbconnection, $query) or die('Query failed.');
			if (mysqli_num_rows($alreadyexists) == 0) {
				echo '<p>The account could not be found.</p>';
			}
		$dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die('Connection failed.');
		$query = "INSERT INTO a10users (username, password) VALUES ('$username','$password')";
		$result = mysqli_query($dbconnection, $query) or die("Query failed.");
		echo 'Login successful.';
	}
 ?>