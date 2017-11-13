<?php
	require_once('variables.php');
	if (isset($_POST['submit'])) {
		$dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die('Connection failed.');
		$username = mysqli_real_escape_string($dbconnection, trim($_POST['username'])) ;
		$password = mysqli_real_escape_string($dbconnection, trim($_POST['password'])) ;
		
		// $query = "INSERT INTO a10users (username, password) VALUES ('$username','$password')";
		// $result = mysqli_query($dbconnection, $query) or die("Query failed.");
		if(!empty($username) && !empty($password)){
			$query = "SELECT * FROM a10users WHERE username = '$username'";
			$alreadyexists = mysqli_query($dbconnection, $query) or die('Query failed.');
			if (mysqli_num_rows($alreadyexists) == 0) {
				$query = "INSERT INTO a10users (username, password) VALUES ('$username', '$password') ";
				mysqli_query($dbconnection, $query) or die('Insert query failed.');
				echo '<p>Your account has been created!</p>';
				echo '<br><a href="create.php">Return to create account</a>';
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
<!-- <script>
window.setTimeout(function() {
    window.location = 'index.php';
  }, 4000);
</script> -->

