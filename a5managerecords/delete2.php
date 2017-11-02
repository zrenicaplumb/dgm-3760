<?php
	$employee_id = $_GET['id'];
	$dbconnection = mysqli_connect('localhost','root','','dgm3760') or die('Connection Failed');
	if (isset($_POST['submit'])) {
		echo $_POST['id'];
		$query = "DELETE FROM a5motorcyclecompetition WHERE id=$_POST[id]";
		echo $query;
		$result = mysqli_query($dbconnection, $query) or die("connection failed");
		header("location: http://localhost/dgm3760/a5managerecords/delete.php");
		exit;
	}
	$query = "SELECT * FROM a5motorcyclecompetition WHERE id=$employee_id";
	$result = mysqli_query($dbconnection, $query) or die('Query failed');
	$found = mysqli_fetch_array($result);
	
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete Contestants</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div class="box">
		<h1>Are you sure you want to delete this person?</h1>
		<form action="delete2.php" method="POST">
			<?php 
				echo "<h2>" . $found['first'] . ' ' . $found['last'] . '<h2>';
				echo $found['photo'];
				echo '<p>';
				echo $found['email'] . '<br>' . $found['phone'];
				echo '<br>';

			?>
			<input type="hidden" name="id" value="<?php echo $found['id'];?>">
			<input type="submit" name="submit" value="DELETE THIS PERSON">
		&nbsp; <a href="delete.php">Cancel</a>
		</form>
	</div>
	

	
</body>
</html>