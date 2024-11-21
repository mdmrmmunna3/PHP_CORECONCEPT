<?php 
$myArray = array("Cow ", " Dog ", " Cat");

list($a, $b, $c) = $myArray;
echo "I have serval animal: ", $a, $c, $b;


$str = "<br> Hello iam explored!";

// echo json_encode(explode(" ",$str));
print_r(explode(" ",$str));
?>