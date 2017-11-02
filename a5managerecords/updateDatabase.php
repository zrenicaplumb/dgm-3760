<?php 

	$id = $_POST['id'];
	$first = $_POST['first'];
	$last = $_POST['last'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$photo = $_POST['photo'];
	
	$dbconnection = mysqli_connect('localhost','root','','dgm3760') or die('db connection failed');

	$query = "UPDATE a5motorcyclecompetition SET first='$first', last='$last', phone='$phone', $email='$email', $photo='$photo' WHERE id='$id' ";
	// echo $query;
	// if ($result = true) {
	// 	# code...
	// }
	$result = mysqli_query($dbconnection, $query) or die('query failed.');
	$mysqli_close($dbconnection);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Employee updated</title>
</head>
<body>

</body>
</html>