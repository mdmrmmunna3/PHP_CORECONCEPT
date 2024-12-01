<?php 
$age = 18;

try {
    if($age > 16) {
        throw new Exception("You are Adult");
    }
    else {
        throw new Exception("You are child");
    }
}

catch(Exception $showError) {
    echo "You Error Message is : " . $showError->getMessage() . "<br>";
}
finally {
    echo "You Condition finally done!";
}
?>