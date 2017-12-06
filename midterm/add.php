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
					$picture = $_POST['picture'];
					$dbconnection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME) or die('Connection failed.');
					$query = "INSERT INTO midterm_employees (firstname, lastname, expertise, phone, email, about, picture) VALUES ('$firstname','$lastname','$expertise','$phone', '$email', '$about', '$picture')";
					$result = mysqli_query($dbconnection, $query) or die('Query failed.');
					$found = mysqli_fetch_array($result);
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
		 		<label for="picture">Picture</label>
		 		<input type="file" name="picture">
		 		<button type="submit" name="submit">Submit</button>
		 	</form>
		 </body>
	 </div>
	 
 </html>