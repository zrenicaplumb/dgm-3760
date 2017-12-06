<?php 
	include_once('protect.php');
?>
<?php require_once('head.php'); 
require_once('variables.php');?>
<body>
	
		
	
	<?php echo '<p class="hello">Hello ' . $_COOKIE['username'] .','. '<a class="signout" href="logout.php" style="color:#fff;"> Sign out</a></p>';
	  
	
		
	?>
	
	<div class="list-wrap">
		<p>
			This is the index page, it is cool I guess.
		</p>
		
		
	</div>
</body>
</html>