<?php
	require_once('variables.php');
	$id = $_GET['id'];
	
	$dbconnection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME) or die('Connection failed.');
	$query = "SELECT * FROM a10movies WHERE id=$id";
	$result = mysqli_query($dbconnection, $query) or die('Query failed.');
		
	$found = mysqli_fetch_array($result);
	// if (isset($_POST['submit'])) {
		$title = $_POST['title'];
		$rating = $_POST['rating'];
		$id = $_POST['id'];
		$image = $_POST['image'];
		$description = $_POST['description'];
		$query = "UPDATE a10movies SET image='$image', title='$title', rating='$rating', description='$description' WHERE id=$id";

		$found = mysqli_query($dbconnection, $query);
	// }
?>
<?php require_once('head.php'); ?>
<?php require_once('header.php') ?>
	<form action="update.php" method="POST" enctype="multipart/form-data">
		<h2>Update Film</h2>
        <label for="title">Title</label>
        <input type="text" name="title" value="<?php echo $found['title'];?>">
        <label for="last">Rating</label>
        <input type="text" name="rating" value="<?php echo $found['rating'];?>">
        <label for="phone">Description</label>
        <input type="tel" name="description" value="<?php echo $found['description'];?>">
        <label for="image">Image</label>
        <input type="file" name="image">
        <input type="hidden" name="id" value="<?php echo $found['id'];?>">
        <button type="submit" name="submit" value="submit">Update</button>  
    </form>
<?php require_once('footer.php');?>