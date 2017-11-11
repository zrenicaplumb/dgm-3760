<!DOCTYPE html>
<html>
<head>
	<title>Display Comments</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<?php require_once('header.php');
	require_once('variables.php'); 
		

	?> 
	
	<form method="POST" action="newentry2.php" enctype="multipart/form-data">
		<h1>Make a Comment</h1>
		<fieldset>
			<h2>What do you want to say?</h2>
			<label for="name">Name:</label>
			<input type="text" name="name">
			<label>Pick a topic</label>
			<select name="topic">
				<option>Sports</option>
				<option>Religion</option>
				<option>Politics</option>
			</select>
			<label for="comment">Comment:</label>
			<textarea name="comment" cols="80" rows="6"></textarea>
		</fieldset>
		<input type="hidden" name="id" value="">
		<input class="" name="submit" type="submit" value="submit"></input>
	</form>
	
</body>
</html>