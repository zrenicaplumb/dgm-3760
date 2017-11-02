<!DOCTYPE html>
<html>
    <head>
        <title>Motorcycle Competition</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <?php 
            require_once('header.php');
        ?>
        <div class="box">
            <form action="thanks.php" method="POST" enctype="multipart/form-data">
            <fieldset>
                <label for="first">First Name</label>
                <input type="text" name="first">
                <label for="last">Last Name</label>
                <input type="text" name="last">
                <label for="phone">Phone Number</label>
                <input type="tel" name="phone">
                <label for="email">Email</label>
                <input type="email" name="email">   

                
            </fieldset>
            <fieldset>
                <label for="photo">Photo</label>
                <input type="file" name="photo">
                <p>Please crop to 150px wide by 200px tall before uploading.</p>
                
            </fieldset>
            <button type="submit" name="submit">Enter Contest</button>
            
        </form>
        </div>
    	
        
    </body>
</html>