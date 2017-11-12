<!DOCTYPE html>
<html>
<head>
	<title>Moviesite.com</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<header>
		<?php 
			require_once('header.php');
		?>
	</header>
	<div class="movie-list">
		<ul>
			<li>
				<a href="details.php">
					<img src="img/alien.jpg">
				</a>
			</li>
			<li>
				<a href="details.php">
					<img src="img/amadeus.jpg">
				</a>
			</li>
			<li>
				<a href="details.php">
					<img src="img/bladerunner.jpg">
				</a>
			</li>
			<li>
				<a href="details.php">
					<img src="img/country.jpg">
				</a>
			</li>
			<li>
				<a href="details.php">
					<img src="img/empire.jpg">
				</a>
			</li>
		</ul>
		
	</div>
</body>
</html>