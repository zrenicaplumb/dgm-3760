<?php require_once('head.php');
	require_once('authorize.php');
 ?>
	 <div id="add-page">
	 	<body>
		 	<?php 
		 		if (isset($_POST['submit'])) {
		 			$firstname = $_POST['firstname'];
					$lastname = $_POST['lastname'];
					$age = $_POST['age'];
					$musicgenres = $_POST['musicgenres'];
					
					
					$dbconnection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME) or die('Connection failed.');
					$query = "INSERT INTO a9musicians (firstname, lastname, age, musicgenres) VALUES ('$firstname','$lastname','$age','$musicgenres')";
					$result = mysqli_query($dbconnection, $query) or die('Query failed.');
		 		}
		 	?>
		 	<form method="POST" enctype="multipart/form-data" action="add.php">
		 		<h2>Add a Musician</h2>
		 		<label for="firstname">First Name</label>
		 		<input type="text" name="firstname">
		 		<label for="lastname">Last Name</label>
		 		<input type="text" name="lastname">
		 		<label for="age">Age</label>
		 		<input type="number" name="age">
		 		<label for="musicgenres">Favorite Genres</label>
		 		<textarea name="musicgenres" placeholder="Enter favorite music genres..." rows="6"></textarea>
		 		<button type="submit" name="submit">Submit</button>
		 	</form>
		 </body>
	 </div>
 </html>