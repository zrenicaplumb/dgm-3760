<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$age = $_POST['age'];
	$from = $_POST['email'];
	$phone = $_POST['phone'];
	$text = $_POST['text'];
	$subject = "Php email form.";
	$to = "zrenicaplumb@gmail.com";
	// mail($to, $subject, $message, 'FROM: ' .$email);

	//BUILD THE DATABASE CONNECTION WITH host, user, pass, database.
	$dbconnection = mysqli_connect('localhost','root','','dgm3760') or die ('connection failed');

	$query = "INSERT INTO a2connectingtomysql (name, age, phone, email, message)
	VALUES ('$name' ,'$age','$phone','$email','$text')";

	if($dbconnection->query($query) === TRUE){
		echo "success";
	}
	else {
		echo 'error' . $query . '<br />' . $dbconnection->error;
	}


	mysqli_close($dbconnection);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Thank you page</title>
</head>
<body>
<p>Thanks for filling out the form <?php  echo $name; ?>! Be sure to check your email!</p>
</body>
</html>
