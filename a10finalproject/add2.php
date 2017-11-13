<?php 
	require_once('variables.php');
	if (isset($_POST['submit'])) {
		
		$title = $_POST['title'];
		$rating = $_POST['rating'];
		$description = $_POST['description'];


	    $check = getimagesize($_FILES["image"]["tmp_name"]);
	    if($check !== false){
	        $image = $_FILES['image']['tmp_name'];
	        $imgContent = addslashes(file_get_contents($image));

	        
	        
	     
	        
	        // $dataTime = date("Y-m-d H:i:s");
	      
	       
	

			$dbconnection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME) or die('Connection failed.');
			$query = "INSERT INTO a10movies (image, title, rating, description) VALUES ('$image','$title','$rating','$description')";
			$result = mysqli_query($dbconnection, $query) or die('Query failed.');
		}
		
?>
