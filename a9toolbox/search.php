<?php require_once('head.php');
	require_once('authorize.php');
 ?>

	<body>
			<div class="list">
				<h2>Search for Musician or Music Genre</h2>
				<div class="search">
					<form action="search.php" method="POST" enctype="multipart/form-data">
						<input type="text" name="search" class="search-button" placeholder="Search">
						<button type="submit" name="submit">
							<i class="fa fa-search" aria-hidden="true"></i>
						</button>
					</form>
					 <?php 
					 	if (isset($_POST['submit'])) {
					 		$search = strtolower($_POST['search']);
					 		$searchCleanUp = str_replace(',',' ', $search);
					 		$searchTerms = explode(' ', $searchCleanUp);
					 		foreach ($searchTerms as $temp) {
					 			if (!empty($temp)) {
					 				$searchArray[] = $temp;
					 			}
					 		}
					 		$whereList = array();
					 		foreach ($searchArray as $temp) {
					 			$whereList[] = "musicgenres LIKE '%$temp%' ";
					 		}
					 		$whereClause = implode(' OR ', $whereList);
					 		$query = "SELECT * FROM a9musicians";
					 		if (!empty($whereClause)) {
					 			$query .=" WHERE $whereClause";
					 		}
					 		


					 		
					 		echo "<h2>Search results: </h2>";
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
					
				</div>
			</div>

	</body>


</html>