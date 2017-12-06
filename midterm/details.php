<?php require_once('head.php'); ?>
<div class="details-page">
	<body>
		<?php 
            $employee_id = $_GET['id'];
            $dbconnection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME) or die('Connection failed.');
            $query = "SELECT * FROM midterm_employees WHERE id='$employee_id' ";
            $result = mysqli_query($dbconnection, $query) or die('Query failed.');
		?>
	
				<div class="list">
					<?php
					 while ($row = mysqli_fetch_array($result)) {
			            	echo '<img src=img/'.$row['photo'].'>';
			            	echo '<p>Name: ' . $row['firstname'] . ' ' . $row['lastname'].'</p>';
			            	echo '<p>Expertise: ' . $row['expertise'] . '</p>';
			            	echo '<p>Phone: ' . $row['phone'] . '</p>';
			            	echo '<a href="mailto:' . $row['email'] . '"><p>Email: ' . $row['email'] . '</a></p>';
			            	echo '<p>About: ' . $row['about'] . '</p>';
							echo '<a href="update.php?id='.$row['id'] .'"> Update Employee</a>';
			            }
					?>
				</div>
			\
	</body>
</div>
</html>