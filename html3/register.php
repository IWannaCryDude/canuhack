<!DOCTYPE html>
<html>
    <head>
        <title>Can U Hack?</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h3>Introduce a password down here:</h3>
        <form action="create.php" method="POST" id="form">
            <input type="text" name="pass">
            <input type="submit" value="Create" name="submit">
            <p><a href="form.php">Go back</a>
        </form>
        <?php
        include("create.php")
        ?>
    </body>
</html>