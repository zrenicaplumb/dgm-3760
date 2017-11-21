<?php 
	$username = 'zrenicaplumb';
	$password = 'password';
	if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) || ($_SERVER['PHP_AUTH_USER'] != $username) || $_SERVER['PHP_AUTH_PW'] != $password) {
		header('HTTP/1.1 401 Unauthorized');
		header('WWW-Authenticate: Basic realm="Up2Date"');
		exit('<h2>You must enter a valid username and password to access this page.</h2>');
	}
?>