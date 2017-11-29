<?php require_once('head.php'); ?>
<body>
	<div id="home-page">
		<div class="wrap">
			<?php require_once('header.php') ;
			require_once('variables.php');
			
			// do some validation here to ensure id is safe

			
			
			?>
			
		
			
			<div class="movie-list">
				<?php 
				$id = 1;
				$path = 'img/';
				$dbconnection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME) or die('Connection failed.');
				$query = "SELECT * FROM a10movies";
				$result = mysqli_query($dbconnection, $query) or die('Query failed.');
				while ($row = mysqli_fetch_array($result)) {
					
				}
				
					
					
					mysqli_close($dbconnection);
				?>
				<!-- <div class="container">
					<h2>Movies</h2>
					<div class="row">
						<div class="col-xs-12 col-sm-4 col-md-3">
							<a href="details.php?id=10">
								<img src="img/alien.jpg">
								<a class="view-details" href="details.php">View Details</a>
							</a>
						</div>
				
						<div class="col-xs-12 col-sm-4 col-md-3">
							<a href="details.php">
								<img src="img/amadeus.jpg">
								<a class="view-details" href="details.php">View Details</a>
							</a>
						</div>		
				
						<div class="col-xs-12 col-sm-4 col-md-3">
							<a href="details.php">
								<img src="img/bladerunner.jpg">
								<a class="view-details" href="details.php">View Details</a>
							</a>
						</div>	
					
						<div class="col-xs-12 col-sm-4 col-md-3">
							<a href="details.php">
								<img src="img/country.jpg">
								<a class="view-details" href="details.php">View Details</a>
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-4 col-md-3">
							<a href="details.php">
								<img src="img/empire.jpg">
								<a class="view-details" href="details.php">View Details</a>
							</a>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3">
							<a href="details.php">
								<img src="img/fight.jpg">
								<a class="view-details" href="details.php">View Details</a>
							</a>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3">
							<a href="details.php">
								<img src="img/gladiator.jpg">
								<a class="view-details" href="details.php">View Details</a>
							</a>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3">
							<a href="details.php">
								<img src="img/arn.jpg">
								<a class="view-details" href="details.php">View Details</a>
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-4 col-md-3">
							<a href="details.php">
								<img src="img/warrior.jpg">
								<a class="view-details" href="details.php">View Details</a>
							</a>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3">
							<a href="details.php">
								<img src="img/vampire.jpg">
								<a class="view-details" href="details.php">View Details</a>
							</a>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3">
							<a href="details.php">
								<img src="img/shawshank.jpeg">
								<a class="view-details" href="details.php">View Details</a>
							</a>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3">
							<a href="details.php">
								<img src="img/django.jpg">
								<a class="view-details" href="details.php">View Details</a>
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-4 col-md-3">
							<a href="details.php">
								
								<a class="view-details" href="details.php">View Details</a>
							</a>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3">
							<a href="details.php">
								<img src="img/vampire.jpg">
								<a class="view-details" href="details.php">View Details</a>
							</a>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3">
							<a href="details.php">
								<img src="img/shawshank.jpeg">
								<a class="view-details" href="details.php">View Details</a>
							</a>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3">
							<a href="details.php">
								<img src="img/django.jpg">
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