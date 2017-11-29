<!DOCTYPE html>
<html>
    <head>
        <title>Motorcycle Competition</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <?php 

            require_once('header.php');

            $contestant_id = $_GET['id'];

            echo $contestant_id;
            $dbconnection = mysqli_connect('localhost','root','','dgm3760') or die("Connection to db failed.");
            $query = "SELECT * FROM a5motorcyclecompetition WHERE id='$contestant_id' ";
            
            $result = mysqli_query($dbconnection, $query) or die('Query failed.');

            $found = mysqli_fetch_array($result);
        ?>
        <div class="box">
            <form action="updateDatabase.php" method="POST" enctype="multipart/form-data">
            <fieldset>
                <label for="first">First Name</label>
                <input type="text" name="first" pattern="[a-zA-Z-]{3,99}" value="<?php echo $found['first'];?>">
                <label for="last">Last Name</label>
                <input type="text" name="last" pattern="[a-zA-Z-]{3,99}" value="<?php echo $found['last'];?>">
                <label for="phone">Phone Number</label>
                <input type="tel" name="phone" value="<?php echo $found['phone'];?>">
                <label for="email">Email</label>
                <input type="email" name="email" value="<?php echo $found['email'];?>">   
               
                
            </fieldset>
            <fieldset>
                <label for="photo">Photo</label>
                <input type="file" name="photo">
                <p>Please crop to 150px wide by 200px tall before uploading.</p>
                <input type="hidden" name="id" value="<?php echo $found['id'];?>">
            </fieldset>
            <button type="submit" name="submit" value="submit">Update employee</button>
            
        </form>
        </div>
    	
        
    </body>
</html>