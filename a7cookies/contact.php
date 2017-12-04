<?php 
	include_once('protect.php');
?>
<?php require_once('head.php'); 
require_once('variables.php');?>
<?php echo '<p class="hello">Hello ' . $_COOKIE['username'] .','. '<a class="signout" href="logout.php" style="color:#fff;"> Sign out</a></p>';
	   
	?>
	<body>
	<div class="list-wrap">
		<h2>Contact us</h2>
		<p>
			This is the contact page, it is cool I guess.
		</p>
		
		
	</div>
</body>
</html>