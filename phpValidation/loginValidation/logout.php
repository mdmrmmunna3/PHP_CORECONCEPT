<?php 
    session_start();

    unset($_SESSION['myname']);
    session_destroy();
    header("location:login.php");

?>