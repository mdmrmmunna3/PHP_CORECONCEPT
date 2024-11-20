<!-- 
TODO: PRACTICE NAMESPACE  

-->
<?php 
require_once "personOne.php";
require_once "personTwo.php";
require_once "personThree.php";

use personOne\Myname;
use personTwo\Myname as hello;
use personThree\Myage;

// call personOne by class
$obj = new Myname();
$obj->checkName();

// call perosnTwo by class 
$obj = new hello();
$obj->checkName();

// call personThree by class
$obj = new Myage();
$obj-> checkAge();

?>