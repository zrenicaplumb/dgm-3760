<?php require_once('head.php');
require_once('authorize.php');
 ?>
	<div id="delete-page">
		<body>
				<?php
					$employee_id = $_GET['id'];
					echo $employee_id;
					$dbconnection = mysqli_connect(HOST,USER,PASSWORD,DB_NAME) or die('Connection Failedd');
					if (isset($_POST['submit'])) {
							
						$query = "DELETE FROM midterm_employees WHERE id=$_POST[id]";
						$result = mysqli_query($dbconnection, $query) or die("connection failed");
						header("location: index.php");
						exit;
					}
					$query = "SELECT * FROM midterm_employees WHERE id=$employee_id";
					$result = mysqli_query($dbconnection, $query) or die('Query failed');	
				 ?>
			<form action="delete.php" method="POST" enctype="multipart/form-data">
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
				<input type="hidden" name="id" value="<?php echo $employee_id;?>">
				<input type="submit" name="submit" value="delete">
			&nbsp; <a href="index.php" style="color:#fff;">Cancel</a>
			</form>
		</body>
	</div>
</html>