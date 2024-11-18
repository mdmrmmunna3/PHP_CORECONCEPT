<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>

    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        form {
            width: 400px;
            background: linear-gradient(to right, teal, cadetblue);
            color: white;
            padding: 40px;
            margin: 0 auto;
            border-radius: 5px;
        }
        form .in{
            width: 100%;
            outline: 0;
            border: 0;
            padding: 5px 0px 5px 8px;
            border-radius: 5px;
            
        }
        .sub {
            outline: 0;
            border: 0;
            border-radius: 5px;
            padding: 10px 20px;
        }
        .result {
            font-size: 30px;
            font-weight: bold;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <section>
        <form action="" method="post">
            <span>Enter Your Integer Number!</span><br>
            <input class="in" type="text" name="num" id="num"><br><br>
            <input class="sub" type="submit" value="Submit">
        </form>
    </section>


    <?php 
    if($_POST) {
        $number = $_POST['num'];
        $fact = 1;


        if($number === 0 || $number === 1) {
            echo "<div class='result'>$number factorial is: 1</div>";
        }else {
            for($i = 2; $i <= $number; $i++) {
                $fact *= $i;
            }
            echo "<div class='result'>$number factorial is: $fact</div>";
        }
    }
    
    ?>
</body>
</html>