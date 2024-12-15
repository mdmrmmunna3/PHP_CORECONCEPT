<?php 
session_start();
unset($_SESSION['checkEmail']);
session_destroy();
header("location: form.php");
?>