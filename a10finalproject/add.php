<?php 
	
require_once('authorize.php');

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
				
				<form action="add2.php" method="POST" enctype="multipart/form-data">
					<h2>Add a film</h2>

					<input type="text" name="title" placeholder="Title">
					<label for="photo">Choose a movie cover</label>
					<input type="file" name="photo" placeholder="Photo" accept="image/*">
					<label for="rating">Rating</label>
					<select name="rating">
						<option>G</option>
						<option>PG</option>
						<option>PG-13</option>
						<option>R</option>
					</select>

					<textarea name="description" cols="20" rows="8" placeholder="Description"></textarea> 
					<button type="submit" name="submit">Add</button>

				</form>
			</div>
		</div>  
		
	</div>
	<?php require_once('footer.php');?>
</body>
</html>
