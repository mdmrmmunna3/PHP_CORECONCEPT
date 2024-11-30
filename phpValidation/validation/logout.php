<?php 
session_start();
unset($_SESSION['myName']);
session_destroy();
header("location:login.php");
?>