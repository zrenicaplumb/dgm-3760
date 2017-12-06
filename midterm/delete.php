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
					
					
				 ?>
			<form action="delete.php" method="POST">
				<h1>Delete this employee?</h1>
				<?php 
					while ($row = mysqli_fetch_array($result)) {
							echo "<h2>" . $row['firstname'] . ' ' . $row['lastname'] . '<h2>';
							echo '<img src=img/'.$row['photo'].'>';
							echo '<p>';
							echo $row['email'];
							echo '<br>';
						}
					
				?>
				<input type="hidden" name="id" value="<?php echo $found['id'];?>">
				<button type="submit" name="submit" value="DELETE THIS PERSON">Delete</button>
			&nbsp; <a href="index.php" style="color:#fff;">Cancel</a>
			</form>
		</body>
	</div>
</html>