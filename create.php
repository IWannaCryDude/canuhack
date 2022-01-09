<?php
if(isset($_POST["submit"])){
if(!empty($_POST['pass'])) {
    $pass=$_POST['pass'];
    $con=mysql_connect('localhost','root','K1d_searxin0') or die(mysql_error());
    mysql_select_db('canuhack') or die("cannot select DB");

    $query=mysql_query("SELECT * FROM access WHERE password='".$pass."'");
    $numrows=mysql_num_rows($query);
    if($numrows==0)
    {
    $sql="INSERT INTO access(password) VALUES('$pass')";

    $result=mysql_query($sql);
        if($result){
    echo "Password successfully created";
    } else {
    echo "Failure!";
    }

    } else {
    echo "That password already exists! Please try again with another.";
    }

} else {
    echo "A password is required!";
}
}
?>