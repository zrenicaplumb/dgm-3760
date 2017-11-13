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
<?php require_once('head.php'); ?>
<body>
	<div id="login-page">
		<div class="wrap">
			<?php require_once('header.php') ?>
			<div class="row">
				<!-- <div class="col-xs-12 col-sm-6 col-md-4">
					
				</div> -->
			</div>
			<div class="container">
				
				<form action="" method="POST" enctype="multipart/form-data">
					

				</form>
			</div>
		</div>  
		<footer>
			
		</footer>
	</div>
	
</body>
</html>
