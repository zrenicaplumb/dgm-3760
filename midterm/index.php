<?php require_once('head.php'); ?>
	<div class="list-page">
		<body>

			<div class="list-head">
				
					<div class="row">
						<div class="container">
							<div class="list">
								<?php
									$dbconnection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME) or die('Connection failed.');
									$query = "SELECT * FROM midterm_employees ORDER BY last ASC";
									$result = mysqli_query($dbconnection, $query) or die('Query failed');
							

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
						</div>
							
							


					</div>
				
			</div>
		</body>
	</div>

</html>