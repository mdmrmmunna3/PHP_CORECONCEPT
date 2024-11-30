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

echo "<br>";

$matchText = "Surprise";
$patt = "/Surprie/i";

echo preg_match($patt, $matchText);
echo "<br>";

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

$check = preg_grep("/^b/i", $input2);
print_r($check);
echo "<br>";

// check for match value; and retrun 0 and 1;
foreach($input2 as $line2) {
    echo preg_match(  $query, $line2, $matches);
}

echo "<br>";
// modify text capitalaze 
$cap = "hello php";
echo " capitalize just first: ";
echo ucfirst($cap); // capitalize just first sentence word;
echo "<br>";
echo "capitalize all: ";
echo ucwords($cap); // capitalize all sentence words;

echo "<br>" ;

$hi = 'banglaDesh';
echo "To LowerCase: ";
echo strtolower($hi);
echo "<br>";
echo "To UpperCase: ";
echo strtoupper($hi);
?>