<?php
	$dbconnection = mysqli_connect('localhost','root','','dgm3760') or die('Connection Failed');
	$query = "SELECT * FROM a5motorcyclecompetition ORDER BY last ASC";
	$result = mysqli_query($dbconnection, $query) or die('Query failed');
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>View Contestants</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<?php 
		require_once('header.php');
	?>
	<div class="box">
		<h1>View Contestants</h1>
		<?php 
			while ($row = mysqli_fetch_array($result)) {
				// echo '<p><a href="detail.php?id='.$row['id'].' ">';
				echo $row['last'] . ', ' . $row['first'] . ' - ' . $row['email']; 
				echo "</a>";
				echo '<a href="update.php?id='.$row['id'] .'">Update</a>';
				echo '</p>';

			};
			mysqli_close($dbconnection);


			?>
	</div>
	

	

	
</body>
</html>