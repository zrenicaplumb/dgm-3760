<?php
	require_once('variables.php');
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die('Connection failed.');
		$query = "INSERT INTO a10users (username, password) VALUES ('$username','$password')";
		$result = mysqli_query($dbconnection, $query) or die("Query failed.");
	}
 ?>
<script>
window.setTimeout(function() {
    window.location = 'index.php';
  }, 5000);
</script>

<p>Your account has been created! You will be now taken back to the home page.</p>