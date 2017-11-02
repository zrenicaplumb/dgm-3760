<?php 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$age = $_POST['age'];
	 $from = $_POST['email'];
	$message = "Thanks for filling out our form";
	$subject = "Php email form.";
	$to = "zrenicaplumb@gmail.com";
	mail($to, $subject, $message, 'FROM: ' . $email);
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