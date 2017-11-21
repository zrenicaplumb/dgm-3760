<?php 
	require_once('variables.php');

	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$topic = $_POST['topic'];
		$comment = $_POST['comment'];
		$date = date('Y-m-d H:i:s');
		$approved = 0;
		$dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die('Could not connect to db.');
		// $query = "INSERT INTO `a6securingtheapplication`( `name`, `topic`, `comment`, `date`, `approved`)
		// VALUES ($name, $topic, $comment, $date, 0)";
		$query = "INSERT INTO a6securingtheapplication (name, topic, comment, date, approved) 
		VALUES ('$name','$topic','$comment','$date','$approved')";

		
		$result = mysqli_query($dbconnection, $query) or die("Query failed.");

	}
		
		

		

	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Thanks page</title>
	</head>
	<body>
		<p>Thanks for submitting a comment, it will be moderated promptly.</p>
	</body>
	</html>