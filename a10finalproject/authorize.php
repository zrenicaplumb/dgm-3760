<?php 
	//username and password for authentication
	$username = 'zrenicaplumb';
	$password = 'password';


	if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) ||
	($_SERVER['PHP_AUTH_USER'] != $username) || ($_SERVER['PHP_AUTH_PW'] != $password)) {
	// The user name/password are incorrect so send the authentication headers
	header('HTTP/1.1 401 Unauthorized');
	header('WWW-Authenticate: Basic realm="Movie Site"');
	exit('Sorry, you must enter a valid user name and password to access this page.');
}

?>


