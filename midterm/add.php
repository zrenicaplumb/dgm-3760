<?php require_once('head.php');
	require_once('authorize.php');
 ?>
	 <div id="add-page">
	 	<body>
		 	<?php 
		 		if (isset($_POST['submit'])) {
		 			$firstname = $_POST['firstname'];
					$lastname = $_POST['lastname'];
					$expertise = $_POST['expertise'];
					$phone = $_POST['phone'];
					$email = $_POST['email'];
					$about = $_POST['about'];
					if (empty($_FILES) || !isset($_FILES['image'])) {
						$photo = $_FILES['photo'];
					}
					//make photo path and name
					$ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
					//destination
					$destination =  $firstname . $lastname . '.' . $ext;
					$filepath = 'img/';
					//upload the file
					$tmp_name = $_FILES['photo']['tmp_name'];
					move_uploaded_file($tmp_name, $filepath.$destination);
					@unlink($_FILES['photo']['tmp_name']);
					$dbconnection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME) or die('Connection failed.');
					$query = "INSERT INTO midterm_employees (firstname, lastname, expertise, phone, email, about, photo) VALUES ('$firstname','$lastname','$expertise','$phone', '$email', '$about', '$destination')";
					$result = mysqli_query($dbconnection, $query) or die('Query failed.');
		 		}
		 	?>
		 	<form method="POST" enctype="multipart/form-data" action="add.php">
		 		<h2>Add Employee</h2>
		 		<label for="firstname">First Name</label>
		 		<input type="text" name="firstname">
		 		<label for="lastname">Last Name</label>
		 		<input type="text" name="lastname">
		 		<label for="expertise">Expertise</label>
		 		<input type="text" name="expertise">
		 		<label for="phone">Phone</label>
		 		<input type="tel" name="phone">
		 		<label for="email">Email</label>
		 		<input type="email" name="email">
		 		<label for="about">About</label>
		 		<input type="text" name="about">
		 		<label for="photo">photo</label>
		 		<input type="file" name="photo" placeholder="" accept="image/*">
		 		<button type="submit" name="submit">Submit</button>
		 	</form>
		 </body>
	 </div>
 </html>