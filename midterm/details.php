<?php require_once('head.php'); ?>
<div class="details-page">
	<body>
		<?php 
            $employee_id = $_GET['id'];
            $dbconnection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME) or die('Connection failed.');
            $query = "SELECT * FROM midterm_employees WHERE id='$employee_id' ";
            $result = mysqli_query($dbconnection, $query) or die('Query failed.');
           
			
		?>
	

		
				
					<div class="row">
						<div class="container">
							<div class="list">
								
								
								<?php

								
								 while ($row = mysqli_fetch_array($result)) {
						            	
						            	echo '<img src=img/'.$row['photo'].'>';
										echo '<a href="update.php?id='.$row['id'] .'"> Update Employee</a>';
						            }

								?>
							</div>
						</div>
							
							<p class="bolded">Expertise:</p>
							<p class="bolded">Phone:</p>
							<p class="bolded">Email:</p>
							<p class="bolded">About:</p>';


					</div>
				
		
		
		
	</body>
</div>
</html>