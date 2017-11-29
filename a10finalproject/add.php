
<?php 
	require_once('authorize.php');
	require_once('head.php'); 
	require_once('variables.php');
	if (isset($_POST['submit'])) {
		
		$title = $_POST['title'];
		$rating = $_POST['rating'];
		$description = $_POST['description'];	
		$path = 'img/';
		$tmp_name = $_FILES['photo']['tmp_name'];	
		$ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
		$image = $title.'.'.$ext;
		$new = move_uploaded_file($tmp_name, $path.$image);
		// echo '<img src="'. $path.$image .' " alt="photo"/>';
			$dbconnection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME) or die('Connection failed.');
			$query = "INSERT INTO a10movies (image, title, rating, description) VALUES ('$image','$title','$rating','$description')";
			$result = mysqli_query($dbconnection, $query) or die('Query failed.');
		}
	


?>
<body>
	<div id="login-page">
		<div class="wrap">
			<?php require_once('header.php') ?>
			<div class="row">
				<!-- <div class="col-xs-12 col-sm-6 col-md-4">
					
				</div> -->
			</div>
			<div class="container">
				
				<form action="add.php" method="POST" enctype="multipart/form-data">
					<h2>Add a film</h2>

					<input type="text" name="title" placeholder="Title">
					<label for="photo">Choose a movie cover</label>
					<input type="file" name="photo" placeholder="Photo" accept="image/*">
					<label for="rating">Rating</label>
					<select name="rating">
						<option>G</option>
						<option>PG</option>
						<option>PG-13</option>
						<option>R</option>
					</select>

					<textarea name="description" cols="20" rows="8" placeholder="Description"></textarea> 
					<button type="submit" name="submit">Add</button>

				</form>
			</div>
		</div>  
		
	</div>
	<?php require_once('footer.php');?>
</body>
</html>
