
<?php

    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $from = "zrenicaplumb@gmail.com";

    $dbconnection = mysqli_connect('localhost','root','','dgm3760') or die ('connection failed');

    $query = "SELECT * FROM a3spammingemail";

    if($dbconnection->query($query) === TRUE){
        echo "success";
    }
    else {
        echo 'error' . $query . '<br />' . $dbconnection->error;
    }

    $result = mysqli_query($dbconnection, $query) or die('Query failed.');

    while ($row = mysqli_fetch_array($result)) {
        $firstname = $row['name'];
        $lastname = $row['lastname'];
        $to = $row['email'];
        $newmessage = 'Dear ' . $firstname . ' ' . $lastname .':' . "\n" . $message;
        mail($to, $subject, $newmessage, 'From: '. $from);
        echo "Message sent to ". $to . '<br />';
    }




    mysqli_close($dbconnection);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sent Message Page</title>
    </head>
    <body>
        <p>You have sent a message to your interested person list.</p>
    </body>
</html>
