<?php 
$input = [
    "Hello Rajib , How are You",
    "You are busy now ken",
    "Yesterday i call you at 8 clock",
    "You don't pick up my phone",
    "You are change bro",
    "i remaber this behavior Ok...."
];

$sadResult = [];

// for numeric 
$sadResult = preg_filter('/[0-9]+/', '$0', $input);

// for string 
/* foreach($input as $line) {

    $sadResult = preg_match_all('/[a-z]/', $line, $matches);
    $sadResult = $matches[0];
} */

print_r($sadResult);


// SEARCH FOR STRING FIRST INDEX...
$input2 = [
    "Red", 
    "Blue",
    "Green",
    "Purple",
    "Pink",
    "papi",
    "White",
    "black"
];

$query = "/papi/i";

// $check = preg_grep("/^b/i", $input2);
// print_r($check);

// check for match value; and retrun 0 and 1;
foreach($input2 as $line2) {
    echo preg_match(  $query, $line2, $matches);
}
?>