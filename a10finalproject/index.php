<?php require_once('head.php'); ?>
<body>
	<div id="home-page">
		<div class="wrap">
			<?php require_once('header.php') ;
			require_once('variables.php');
			
			// do some validation here to ensure id is safe

			
			
			?>
			
		<div class="">
			
		</div>
			
			<div class="movie-list">
				<div class="container">
					<h2>Movies</h2>
					<div class="row">
				<?php 
				
				
				$dbconnection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME) or die('Connection failed.');
				$query = "SELECT * FROM a10movies";
				$result = mysqli_query($dbconnection, $query) or die('Query failed.');
				while ($row = mysqli_fetch_array($result)) {
					echo 
					'
						<div class="col-xs-12 col-sm-4 col-md-3">
							<a href="details.php?id='.$row['id'].'">
								<img class="movie-img" src=img/'.$row['image'].'>
								<a class="view-details" href="details.php">View Details</a>
							</a>
						</div>
						';
					
					 
				}
				
					
					
					mysqli_close($dbconnection);
				?>
					</div>
				</div>	
			</div>
				<!-- <div class="container">
					<h2>Movies</h2>
					<div class="row">
						<div class="col-xs-12 col-sm-4 col-md-3">
							<a href="details.php?id=10">
								<img src="img/alien.jpg">
								<a class="view-details" href="details.php">View Details</a>
							</a>
						</div>
				
						
					</div>
					
					
					
				</div> -->
			</div>
		</div>  
	</div>
	<?php require_once('footer.php');?>
</body>
</html>