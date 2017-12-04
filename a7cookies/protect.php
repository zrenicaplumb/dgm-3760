<?php 
	if (!isset($_COOKIE['username'])) {
		require_once('head.php'); 
		echo '<h2 class="hello2">Please <a href="login.php">log in</a> to access this page</h2>';
		exit();
	}
?>