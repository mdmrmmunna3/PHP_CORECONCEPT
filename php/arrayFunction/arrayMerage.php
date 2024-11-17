

<?php 

// array merage
$array1 = ["A","B","C"];
$array2 = ["X","Y","Z"];

echo json_encode(array_merge($array1,$array2)) ;

$arrayPop = array_pop($array1);
echo "<br>";
echo json_encode("ArrayPop:".$arrayPop);
echo "<br>";

$arrayPush = array_push($array2, "M");
echo "<br>";

echo json_encode("ArrayPush:".$arrayPush);
echo "<br>";

echo "ArrayPush: ";
echo json_encode($array2);
echo "<br>";

$arrayReverse = array_reverse($array2);
echo "ArrayReverse: ";
echo json_encode($arrayReverse);
echo "<br>";

// array unique
$array3 = ["A", "B", "B", "A","C","A","B","C","C","X","Y","Z"];
$arrayUnique = array_unique($array3);
echo "Array Unique: ";
echo json_encode($arrayUnique);
echo "<br>";

// array occurance 
$arrayOccurance = array_count_values($array3);
echo "Array Occurance: ";
echo json_encode($arrayOccurance);
?>