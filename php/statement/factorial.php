
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial </title>
</head>
<body>
    
    <section>
       <form action="" method="post">
        <span>Enter Inger Number!</span> <br>
        <input type="text" name="number" id="number">
        <input type="submit" value="Submit">
       </form>
    </section>

    <!-- php syntax here -->
     <?php 
    //  if($_SERVER["REQUEST_METHOD"] == 'POST') {
    //     // get user input from to the form
    //     $number = $_POST['number'];
    //     $factorial = 1;
    //     // Basic validation to ensure fields are not empty
    //     if(empty($number)) {
    //         echo "Number fields are requried!";
    //     }
    //     elseif (!is_numeric($number) || $number < 0 ){
    //         echo "Factorial not defined for negative numbers";
    //     }
    //     elseif($number === 0 || $number === 1) {
    //         echo "$number factorial is 1";
    //     }
    //     else{
    //         for($i = 2; $i <= $number; $i++) {
    //             $factorial *= $i;
    //         }
    //         echo "$number factorial is : $factorial";
    //         echo "<br><br>";
    //     }
    //  }
    // 
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];
        $fact = 1;

        if(empty($number)) {
            echo "Number field are required!";
        }
        elseif(!is_numeric($number) || $number < 0) {
            echo "Factorial are not defined for negative numbers!";
        }
        elseif($number === 0 || $number === 1){
            echo "$number factorial is 1";
        }
        else{
            for($i = 2; $i <= $number; $i++) {
                $fact *= $i;
            }
            echo "$number factorial is $fact";
            echo "<br><br>";
        }
    }
    
    ?>

</body>
</html>


<!-- without get input value.. used fixed values  -->
<?php 
// factorial 
$number = 5;
$factorial = 1;

if ($number < 0) {
    return "Factorial not defined for negative numbers";
}

if($number === 0) {
    return 1;
}
else{
    for($i = 2; $i <= $number; $i++) {
        $factorial *= $i;
    }
    echo "$number Factorial is : $factorial";
    // echo $factorial;
}

?>