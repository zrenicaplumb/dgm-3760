<?php require_once('head.php'); ?>
	<div class="list-page">
		<body>
			
			
						<div class="list">
							<?php
								$dbconnection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME) or die('Connection failed.');
								$query = "SELECT * FROM a9musicians ";
								$result = mysqli_query($dbconnection, $query) or die('Query failed');
								while ($row = mysqli_fetch_array($result)) {
									// echo '<p><a href="detail.php?id='.$row['id'].' ">';
									echo $row['id']. ' ' . $row['lastname'] . ', ' . $row['firstname'] . ' - age: ' . $row['age'] . '  <br> Favorite Genres: ' . $row['musicgenres']; 
									echo "</a>";
									echo '<br><a href="details.php?id='.$row['id'] .'"> View Musician Details</a> ';
									echo '<br>';
									echo '<a href="delete.php?id='.$row['id'] .'">Delete Musician</a>';
									echo '</p>';
								};
								mysqli_close($dbconnection);
							?>
						</div>
				
			
		</body>
	</div>

</html>