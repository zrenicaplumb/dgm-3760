<?php
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$age = $_POST['age'];
	$from = $_POST['email'];
	$phone = $_POST['phone'];

	$subject = "Php email form.";
	$to = "zrenicaplumb@gmail.com";
	// mail($to, $subject,  'FROM: ' .$email);

	//BUILD THE DATABASE CONNECTION WITH host, user, pass, database.
	$dbconnection = mysqli_connect('localhost','root','','dgm3760') or die ('connection failed');

	$query = "INSERT INTO a3spammingemail (name, lastname, age, phone, email)
	VALUES ('$name' ,'$lastname' ,'$age','$phone','$email')";

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
