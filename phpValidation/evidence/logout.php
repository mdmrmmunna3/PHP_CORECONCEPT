<?php 
session_start();
unset($_SESSION['checkName']);
session_destroy();
header('location:form.php');
?>