<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Statement </title>
</head>
<body>


<h1>User Input Form</h1>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
// Check if the form was submitted via POST
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Get user input from the form
//     $name = $_POST['name'];
//     $email = $_POST['email'];

//     // Sanitize user input to avoid XSS
//     $name = htmlspecialchars($name);
//     $email = htmlspecialchars($email);

//     // Basic validation to ensure fields are not empty
//     if (empty($name) || empty($email)) {
//         echo "Name and Email are required fields!";
//     } else {
//         // Display sanitized data
//         echo "<h2>Form Data Received:</h2>";
//         echo "Name: " . $name . "<br>";
//         echo "Email: " . $email . "<br>";
//         // header("Location: hello.php?name=" . urlencode($name) . "&email=" . urlencode($email));
//         // exit(); 
//     }
// }
?>

<br> <br>

<form action="" method="post">
        <label for="name1">Number1:</label>
        <input type="text" id="name1" name="name1" required placeholder="Enter first Number"><br><br>

        <label for="name2">Number2:</label>
        <input type="text" id="name2" name="name2" required placeholder="Enter second Number"><br><br>

        <label for="name3">Number3:</label>
        <input type="text" id="name3" name="name3" required placeholder="Enter third Number"><br><br>

        <input type="submit" value="Submit">
        <br>
    </form>

    
    <?php 
    // $x = 90;
    // $y = 50;
    // $z = 100;

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $name1 = $_POST['name1'];
        $name2 = $_POST['name2'];
        $name3 = $_POST['name3'];

        if($name1 > $name2 && $name1 > $name3) {
            echo "$name1, $name2, $name3 amount largest number is $name1";
        }
        else if($name2 > $name1 && $name2 > $name3) {
            echo "$name1, $name2, $name3 amount largest number is $name2";
        }
    
        else {
            echo "$name1, $name2, $name3 amount largest number is $name3";
        }
    }
    
    
    
    ?>

<br> <br>
 <!-- php _SERVER superglobals variable  -->
  <?php 
    /* echo $_SERVER['PHP_SELF']; // CHECK FOLDER PATH
    echo "<br>";
    echo $_SERVER['SERVER_NAME']; // CHECK SERVER NAME LIKE LOCALHOST
    echo "<br>";
    echo $_SERVER['HTTP_HOST']; // CHECK SERVER HTTP HOST LIKE LOCALHOST
    echo "<br>";
    echo $_SERVER['HTTP_REFERER']; // CHECK SERVER FULL URL 
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT']; // CHECK WHICH BROWSER ARE SUPPORTED 
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME']; //SAME TO PHP_SELF 
    echo "<br>";
    echo $_SERVER['REQUEST_METHOD']; // CHECK WHICH REQUEST SEND YOU ARE.
    echo "<br>";
    echo $_SERVER['REQUEST_URI']; //SAME TO PHP_SELF OR SCRIPT_NAME
    echo "<br>"; */
  ?>




</body>
</html>