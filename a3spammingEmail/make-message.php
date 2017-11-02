<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Spam Message Form</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <form action="send-message.php" method="post" enctype="multipart/form-data">
            <h1>Spam Form</h1>
            <label for="subject">Subject</label>
            <input type="text" name="subject" value="">
            <label for="message">Message</label>
            <input type="text" name="message" value="">
            <button type="submit" name="button">Send</button>
            <a href="index.html">Signup form</a>
        </form>
    </body>
</html>
