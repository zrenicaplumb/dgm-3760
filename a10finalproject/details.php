<?php

  $id = $_GET['id'];
  // do some validation here to ensure id is safe

 
  
  $sql = "SELECT image FROM a10movies WHERE id=$id";
  $result = mysql_query("$sql");
  $row = mysql_fetch_assoc($result);
  mysql_close($link);

  header("Content-type: image/jpeg");
  echo $row['image'];
?>
<?php require_once('head.php'); ?>
<body>
	<div id="login-page">
		<div class="wrap">
			<?php require_once('header.php') ?>
			<div class="row">
				<!-- <div class="col-xs-12 col-sm-6 col-md-4">
					
				</div> -->
			</div>
			<div class="container">
				
				
			</div>
		</div>  
		
	</div>
	<?php require_once('footer.php');?>
</body>
</html>