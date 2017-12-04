<?php 
	include_once('protect.php');
?>
<?php require_once('head.php'); 
require_once('variables.php');?>
<body>
	
		
	
	<?php echo '<p class="hello">Hello ' . $_COOKIE['username'] .','. '<a class="signout" href="logout.php" style="color:#fff;"> Sign out</a></p>';
	    $error = "";
		$dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die('Connection failed.');
		if (isset($_POST['submit'])) {
			$task = $_POST['task'];
			if (empty($task)) {
				$error = "Please enter a task";
			}
			else{
				mysqli_query($dbconnection, "INSERT INTO tasks (task) VALUES ('$task')");
			}
		}
		if (isset($_GET['del_task'])) {
			$id = $_GET['del_task'];
			mysqli_query($dbconnection, "DELETE FROM tasks WHERE id=$id");
		}
		$tasks = mysqli_query($dbconnection, "SELECT * FROM tasks");
		if (isset($_POST['save'])) {
				$email = $_POST['emailto'];
				$subject = "Here is your latest task list";
			    $result = mysqli_query($dbconnection, "SELECT * FROM tasks") or die("error");
			    while ($row = mysqli_fetch_array($result)) {
			        $content = $row['task'];
			      	echo '<script>';
				  	echo 'console.log('. json_encode( $row['task'] ) .')';
				  	echo '</script>';
			    }

			    $message = "Hello ".$email.", here is your task list. \n" . $content;
			    
			  	

			    mail($email, $subject, $message);
			}
	?>
	
	<div class="list-wrap">
		<p>
			This is the index page, it is cool I guess.
		</p>
		
		
	</div>
</body>
</html>