<!DOCTYPE html>
<html>
<head>
	<title>Thanks page</title>
</head>
<body>
	<p>Thanks for entering the contest!</p>
	<?php 
		$first = $_POST['first'];
		$last = $_POST['last'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		


		if (empty($_FILES) || !isset($_FILES['image'])) {
			$photo = $_FILES['photo'];
		}
		//make photo path and name
		$ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
		//echo $ext; //jpg
		
		// verify the image is valid
		$validImage = true;
		if ($_FILES['photo']['size'] == 0) {
			echo 'OOPS -- you did not select an image!';
			$validImage = false;
		};
		//check if image size is too large
		if ($_FILES['photo']['size'] > 204800) {
			echo "The image is larger than 200kb.";
			$validImage = false;
		}
		//check file type
		if ($_FILES['photo']['type'] == 'image/gif' || $_FILES['photo']['type'] == 'image/jpeg'
	  	|| $_FILES['photo']['type'] == 'image/png' || $_FILES['photo']['type'] == 'image/pjpeg') {
			//everything is good
		}	else{
			echo "OOPS that file is in the wrong format.";
			$validImage = false;
		}



		
		//destination
		$destination =  $first . $last . time() . '.' . $ext;
		$filepath = 'img/';
		if ($validImage == true) {
			//upload the file
			$tmp_name = $_FILES['photo']['tmp_name'];
			move_uploaded_file($tmp_name, $filepath.$destination);
			@unlink($_FILES['photo']['tmp_name']);

			$dbconnection = mysqli_connect('localhost','root','','dgm3760') or die ('Connection failed');
			$query = "INSERT INTO a5motorcyclecompetition (first, last, phone, email, photo) 
			VALUES ('$first','$last','$phone','$email','$destination')";
			$result = mysqli_query($dbconnection, $query) or die ('Query failed.');
			mysqli_close($dbconnection);
			

		} 

		else{
			echo '<a href="index.php">Please try again. </a>';
		}
		echo "$first $last <br>";
		echo "$email <br>";
		echo "$phone <br>";
		echo '<img src="'. $filepath.$destination .' " alt="photo"/>'; 

		echo '<br>size--'.$_FILES['photo']['size'];
		echo '<br>type--'.$_FILES['photo']['type'];
		echo '<br>temp--'.$_FILES['photo']['tmp_name'];
		echo '<br>name--'.$_FILES['photo']['name'];
	 ?>
</body>
</html>