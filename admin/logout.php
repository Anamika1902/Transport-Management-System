<?php
session_start();
include("../config/connection.php");
if(isset($_POST["logout_btn"]))
{
    unset($_SESSION['auth']);
    unset($_SESSION['auth_usertype']);
    unset($_SESSION['auth_user']);

    header('Location: ../index.php');
    exit(0);
}
?>