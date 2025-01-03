<?php
$con=mysqli_connect("localhost","root","","transport");

if(!$con){
    header("Location: db_error.php");
    die();
}



?>