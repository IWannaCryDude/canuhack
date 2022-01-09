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
        <?php
        include("access.php");
        ?>  
    </body>
</html>