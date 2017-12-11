<?php
	require_once('variables.php');
	
	$id = $_GET['id'];
	
	$dbconnection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME) or die('Connection failed.');
	
	$query = "SELECT * FROM a10movies WHERE id=$id";
	$result = mysqli_query($dbconnection, $query) or die('Query failed.');
		// header("Content-type: image/jpeg");
	if (isset($_POST['submit'])) {
		$comment = $_POST['comment'];
		$query = "INSERT INTO a10users (comment) VALUES ('$comment') ";
		$result = mysqli_query($dbconnection, $query) or die('Query failed.');
	}
?>

<?php require_once('head.php'); ?>
<body>
	<div id="details-page">
		<div class="wrap">
			<?php require_once('header.php') ?>

			<div class="container">
				<div class="row">
				<?php
					 while ($row = mysqli_fetch_array($result)) {
					 	;
			            echo '<img class="details-img" src=img/' . $row['image'] . '>';
			            echo '<h3>Title </h3><p>' . $row['title'] . '</p>';
			            echo '<h3>Rating </h3><p>' . $row['rating'] . '</p>';
			            echo '<h3>Description </h3><p>' . $row['description'] . '</p>';
			            echo '<a href="update.php?id='.$row['id'].'">Edit movie info</a>';
			            }
					?>
					<div class="comments-wrap">
						<form action="details.php" method="POST" enctype="multipart/form-data" id="comments">
							<h4>Comments</h4>
							
							<textarea name="comment" placeholder="Write a comment..."></textarea>
							<button type="submit" name="submit">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>  
		
	</div>
	<?php require_once('footer.php');?>
</body>
</html>