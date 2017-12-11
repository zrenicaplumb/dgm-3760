<?php require_once('head.php'); ?>
<div class="details-page">
	<body>
		<?php 
            $employee_id = $_GET['id'];
            $dbconnection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME) or die('Connection failed.');
            $query = "SELECT * FROM a9musicians WHERE id='$employee_id' ";
            $result = mysqli_query($dbconnection, $query) or die('Query failed.');
		?>
	
				<div class="list">
					<?php
					 while ($row = mysqli_fetch_array($result)) {
			            	
			            	echo '<p>Name: ' . $row['firstname'] . ' ' . $row['lastname'].'</p>';
			            	echo '<p>Age: ' . $row['age'] . '</p>';
			            	echo '<p>Favorite Genres: ' . $row['musicgenres'] . '</p>';
			            	
			            	
							// echo '<a href="update.php?id='.$row['id'] .'"> Update Musician</a>';
			            }
					?>
				</div>
			\
	</body>
</div>
</html>