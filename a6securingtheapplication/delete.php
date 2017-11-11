<?php 
	$id = $_GET['id'];
	

	require_once('variables.php');
	$dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die('Could not connect to db.');
	$query = "DELETE FROM a6securingtheapplication WHERE id=$id";
	$result = mysqli_query($dbconnection, $query) or die("Query failed.");
	header('Location: approve.php');
	
?>