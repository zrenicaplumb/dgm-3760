<?php
	require_once('variables.php');
	$id = $_GET['id'];
	// do some validation here to ensure id is safe

	
	$dbconnection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME) or die('Connection failed.');
	$query = "SELECT image FROM a10movies WHERE id=$id";
	$result = mysqli_query($dbconnection, $query) or die('Query failed.');
	$row = mysqli_fetch_assoc($result);
	header("Content-type: image/jpeg");
	echo $row['image'];
	mysqli_close($link);
?>
<?php require_once('head.php'); ?>
<body>
	<div id="details-page">
		<div class="wrap">
			<?php require_once('header.php') ?>
			<div class="row">
				<!-- <div class="col-xs-12 col-sm-6 col-md-4">
					
				</div> -->
			</div>
			<div class="container">
				
				
			</div>
		</div>  
		
	</div>
	<?php require_once('footer.php');?>
</body>
</html>