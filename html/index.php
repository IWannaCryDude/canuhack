<?php
    // Connect to database
    $conn = mysqli_connect('localhost', 'root', 'K1d_searxin0', 'canuhack');
    // Check connection
    if(!$conn) {
        echo 'Connection error: ' . mysqli_connect_error();
    }
    // Write query
    $sql = 'SELECT pass FROM access';
    // Make query & get result
    $result = mysqli_quey($conn, $sql);
    // Fetch the resulting row as an array
    $pass = mysqli_fetch_all($result, MYSQLI_ASSOC);
    print_r($pass);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Can U Hack?</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div id="page">
            <h3>Introduce the password below:</h3>
            <form action="access.php" method="POST" id="form">
                <input type="text" name="pass"><br>
                <input type="submit" value="Send" name="submit" id="submit"><br>
                <p><a href="index.php">Go back</a><br>
            </form>
        </div>
    </body>
</html>