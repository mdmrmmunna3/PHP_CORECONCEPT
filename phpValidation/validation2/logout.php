<?php 
session_start();
unset($_SESSION['validName']);
session_destroy();
header("location:form.php");
?>