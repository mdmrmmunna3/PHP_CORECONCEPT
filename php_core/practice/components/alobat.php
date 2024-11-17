<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice website with php</title>

    <!-- daisyui link  -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <!-- tailwind css cdn link  -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <section>
        <?php 
       
    include_once("header.php");
    include("gallery.php");
    include("card.php");
    include_once("footer.php");
    ?>
   

   <?php

/* 
// indexed array
$fruits = ['apple', 'mango', 'lemon'];
echo $fruits[1];
echo "\n";

// associate array
$person1 = [
    "name"=> "php",
    "age" => "i don't know"
    ];
echo $person1["name"];
echo "\n";

// multidimensonal array
$person2 = [
    ["name" => "hello", "age" => 2],
    ["name" => "hi", "age" => 1],
    ];
    
    echo $person2[0]["age"]; 
    
    echo "\n";

    print_r ($person2);
    echo "\n";

    var_export ($person2);
    echo "\n";
    echo json_encode ($person2);

    */
?>

    </section>
</body>

</html>