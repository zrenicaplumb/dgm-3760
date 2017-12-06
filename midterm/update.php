<?php require_once('head.php'); ?>
    <div class="update-page">
        <body>
            <?php 
                $employee_id = $_GET['id'];
                $dbconnection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME) or die('Connection failed.');
                $query = "SELECT * FROM midterm_employees WHERE id='$employee_id' ";
                $result = mysqli_query($dbconnection, $query) or die('Query failed.');
                $found = mysqli_fetch_array($result);
                if (isset($_POST['submit'])) {
                    $id = $_POST['id'];
                    $firstname = $_POST['firstname'];
                    $lastname = $_POST['lastname'];
                    $expertise = $_POST['expertise'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $about = $_POST['about'];
                    $photo = $_FILES['photo'];
                    if (empty($_FILES) || !isset($_FILES['image'])) {
                        $photo = $_FILES['photo'];
                    }
                    //make photo path and name
                    $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
                    //destination
                    $destination =  $firstname . $lastname . '.' . $ext;
                    $filepath = 'img/';
                    //upload the file
                    $tmp_name = $_FILES['photo']['tmp_name'];
                    move_uploaded_file($tmp_name, $filepath.$destination);
                    @unlink($_FILES['photo']['tmp_name']);
                    $dbconnection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME) or die('Connection failed.');
                    $query = "UPDATE midterm_employees SET firstname='$firstname', lastname='$lastname', expertise='$expertise', phone='$phone', email='$email', about='$about', photo='$destination' WHERE id='$id'"; 
                    $result = mysqli_query($dbconnection, $query) or die('query failed.');
                    mysqli_close($dbconnection);
                   header("Location: index.php"); 
                }
            ?>
             <form method="POST" enctype="multipart/form-data" action="update.php">
                    <h2>Update Employee</h2>
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
                    <label for="photo">photo</label>
                    <input type="file" name="photo">
                    <input type="hidden" name="id" value="<?php echo $found['id'];?>">
                    <button type="submit" name="submit">Submit</button>
                </form>
        </body>
    </div>
</html>