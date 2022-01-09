<?php
    // Connect to database
    $conn = mysqli_connect('localhost', 'root', 'K1d_searxin0', 'canuhack');
    //Check connection
    if(!$conn) {
        echo 'Connection error: ' . mysqli_connect_error();
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Can U Hack?</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h3>Introduce the password down here:</h3>
        <form action="access.php" method="POST" id="form">
            <input type="text" name="pass">
            <input type="submit" value="Send" name="submit">
            <p><a href="index.php">Go back</a>
        </form>
    </body>
</html>
