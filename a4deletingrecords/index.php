<!DOCTYPE html>
<html>

     <head>
          <meta charset="utf-8">
          <title>Delete Form</title>
          <link rel="stylesheet" href="main.css">
     </head>

     <body>
          <form class="" action="index.php" method="post">
               <fieldset>
                    <legend></legend>
                    <h2>People for removal from mailing list</h2>
                    <?php
                      $dbconnection = mysqli_connect('localhost','root','','dgm3760') or die("Connection Failed");

                      //DELETE SELECTED RECORDS//
                      if (isset($_POST['submit'])) {
                          foreach ($_POST['todelete'] as $delete_id) {
                            $query = "DELETE FROM a3spammingemail WHERE id=$delete_id";
                            $result = mysqli_query($dbconnection, $query) or die('Query failed');
                          }
                      }
                      
                      $query = "SELECT * FROM a3spammingemail";

                      $result = mysqli_query($dbconnection, $query) or die ('query failed');

                      //DISPLAY REMAINING RECORDS//
                      while ($row = mysqli_fetch_array($result)) {
                          echo '<label> <br />' ;
                          echo '<input type="checkbox" value="' . $row['id'] . '" name="todelete[]" />';
                          echo $row['name'] .' '. $row['lastname'] .' - '. $row['email'];
                          echo '</label>';
                      }

                      mysqli_close($dbconnection);
                     ?>
                    <input type="submit" name="submit" value="submit" class="submitBtn">
               </fieldset>

          </form>

     </body>

</html>
