<?php
if(isset($_POST["submit"])){

if(!empty($_POST['pass'])) {
    $pass=$_POST['pass'];

    $con=mysql_connect('localhost','root','K1d_searxin0') or die(mysql_error());
    mysql_select_db('canuhack') or die("cannot select DB");

    $query=mysql_query("SELECT * FROM access WHERE password='".$pass."'");
    $numrows=mysql_num_rows($query);
    if($numrows!=0)
    {
    while($row=mysql_fetch_assoc($query))
    {
    $dbpassword=$row['password'];
    }

    if($pass == $dbpassword)
    {
    session_start();
    $_SESSION['sess_user']=$pass;

    echo "Well done :)";
    sleep(3);
    /* Redirect browser */
    header("Location: success.php");
    }
    } else {
    echo "Oops, that's not the password...";
    }

} else {
    echo "A password is required!";
}
}
?>