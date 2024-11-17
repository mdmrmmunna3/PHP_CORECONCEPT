<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Display</title>
</head>
<body>

<form action="" method="post">
    <label for="number">Number:</label>
    <input type="text" name="number" id="number" placeholder="please input your integer number"> 
    <input type="submit" value="Submit">
</form>

<?php
// Check if the 'name' and 'email' are present in the query parameters
/* if (isset($_GET['name']) && isset($_GET['email'])) {
    // Sanitize the input (to avoid any malicious content, though it was already sanitized)
    $name = htmlspecialchars($_GET['name']);
    $email = htmlspecialchars($_GET['email']);

    // Display the sanitized data
    echo "<h2>Form Data Received:</h2>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
} else {
    // Display a message if no data is received via the query string
    echo "No data received. Please submit the form first.";
} */

function primeNumber () {
    if($_SERVER["REQUEST_METHOD"] == 'POST') {
        $count = 0;
        $number =$_POST['number'];

        if($number <= 1){
            echo "$number is not prime or composite";
        }
        else{
            for($i = 2; $i < $number; $i++) {
                if($number % 2 === 0) {
                    $count++;
                    break;
                }
            }

            if($count === 0) {
                echo "$number is prime number!";
            }
            else {
                echo "$number is not prime number!";
            }
        }
    
    }
}

primeNumber();


?>

</body>
</html>
