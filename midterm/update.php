<?php require_once('head.php'); ?>
    <div class="update-page">
        <body>
            <?php 

                

                $employee_id = $_GET['id'];

                
                $dbconnection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME) or die('Connection failed.');
                $query = "UPDATE a5motorcyclecompetition SET first='$first', last='$last', phone='$phone', email='$email' WHERE id='$id'";
                
                $result = mysqli_query($dbconnection, $query) or die('Query failed.');

                $found = mysqli_fetch_array($result);



    
    
   
    
            ?>
           
             <form method="POST" enctype="multipart/form-data" action="update.php">
                    <h2>Add Employee</h2>
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" value="<?php echo $found['firstname'];?>">
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" value="<?php echo $found['lastname'];?>">
                    <label for="expertise">Expertise</label>
                    <input type="text" name="expertise" value="<?php echo $found['expertise'];?>">
                    <label for="phone">Phone</label>
                    <input type="tel" name="phone" value="<?php echo $found['phone'];?>">
                    <label for="email">Email</label>
                    <input type="email" name="email" value="<?php echo $found['email'];?>">
                    <label for="about">About</label>
                    <input type="text" name="about" value="<?php echo $found['about'];?>">
                    <label for="picture">Picture</label>
                    <input type="file" name="picture" >
                    <input type="hidden" name="id" value="<?php echo $found['id'];?>">
                    <button type="submit" name="submit">Submit</button>
                </form>
           
        	
            
        </body>
    </div>
</html>