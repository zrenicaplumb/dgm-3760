<?php require_once('head.php');
	require_once('authorize.php');
 ?>
 <?php 
 	if (isset($_POST['submit'])) {
 		$query = "SELECT * FROM a9musicians WHERE musicgenres LIKE 'rock'";
 		echo "<h2>Search results for ....</h2>";
 		$dbconnection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME) or die('Connection failed.');
 		$result = mysqli_query($dbconnection, $query) or die('Query failed');
 		if (mysqli_num_rows($result) > 0) {
 			while ($row = mysqli_fetch_array($result)) {
 				echo '<h3>' .$row['firstname'] . '</h3>';
 				echo $row['musicgenres'];
 			}
 		}
 	}
 ?>
	<body>
			<div class="list">
				<h2>Search for Musician or Music Genre</h2>
				<div class="search">
					<form action="search.php" method="POST" enctype="multipart/form-data">
						<input type="text" name="search" class="search-button" placeholder="Search">
						<button type="submit">
							<i class="fa fa-search" aria-hidden="true"></i>
						</button>
					</form>
					
				</div>
			</div>

	</body>


</html>