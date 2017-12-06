<?php require_once('head.php');
require_once('authorize.php');
	
 ?>
	<div class="delete-page">
		<body>
		
					
			
			
				<?php
					$employee_id = $_GET['id'];
					$dbconnection = mysqli_connect('localhost','root','','dgm3760') or die('Connection Failed');
					if (isset($_POST['submit'])) {
						$query = "DELETE FROM midterm_employees WHERE id=$_POST[id]";
						$result = mysqli_query($dbconnection, $query) or die("connection failed");
						header("location: index.php");
						exit;
					}
					$query = "SELECT * FROM midterm_employees WHERE id=$employee_id";
					$result = mysqli_query($dbconnection, $query) or die('Query failed');
					$found = mysqli_fetch_array($result);
				 ?>
		
			<form action="delete.php" method="POST">
				<h1>Delete this employee?</h1>
				<?php 
					echo "<h2>" . $found['firstname'] . ' ' . $found['lastname'] . '<h2>';
					echo $found['photo'];
					echo '<p>';
					echo $found['email'];
					echo '<br>';
				?>
				<input type="hidden" name="id" value="<?php echo $found['id'];?>">
				<button type="submit" name="submit" value="DELETE THIS PERSON">Delete</button>
			&nbsp; <a href="index.php" style="color:#fff;">Cancel</a>
			</form>
		</body>
	</div>
</html>