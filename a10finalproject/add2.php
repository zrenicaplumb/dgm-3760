<?php 
	require_once('variables.php');
	if (isset($_POST['submit'])) {
		
		$title = $_POST['title'];
		$rating = $_POST['rating'];
		$description = $_POST['description'];

		
		$path = 'img/';
		$tmp_name = $_FILES['photo']['tmp_name'];
		
		$ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
		$image = $path.$title.'.'.$ext;
		$new = move_uploaded_file($tmp_name, $image);
	  	echo $image;

	        
	        
	     
	        
	
	      
	       
	

			$dbconnection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME) or die('Connection failed.');
			$query = "INSERT INTO a10movies (image, title, rating, description) VALUES ('$image','$title','$rating','$description')";
			$result = mysqli_query($dbconnection, $query) or die('Query failed.');
		}
	

?>
