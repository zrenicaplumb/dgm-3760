<!DOCTYPE html>
<html>
<head>
	<title>Display Comments</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

	<?php require_once('header.php');
		require_once('variables.php');

		$dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die('Could not connect to db.');
		$query = "SELECT * FROM a6securingtheapplication WHERE approved=0 ORDER BY date";

		$result = mysqli_query($dbconnection, $query) or die("Query failed.");
	 ?> 
	 <form>
		<h1>Blog Comments</h1>
		<?php 
		if (mysqli_num_rows($result) == 0) {
			echo '<p>All comments have been approved</p>';
		}else{
			while ($row = mysqli_fetch_array($result)) {
				echo '<article>';
				echo '<h2>' .$row['name'].'</h2>';
				echo '<p class="topic">'.$row['topic'].'</p>';
				echo '<p>'.$row['comment'].'</p>';
				echo '<p class="date">' .$row['date'].'</p>';
				echo '<a class="approve" href=approve2.php?id='.$row['id'].'>Approve</a>';
				echo '<a class="delete" href=delete.php?id='.$row['id'].'>Delete</a>';
				echo '</article>';
			}
		}
			mysqli_close($dbconnection);
		?>
	</form>

</body>
</html>