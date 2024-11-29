<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Factorial!</title>
    <style>
    #form_container {
        width: 400px;
        margin: 10px auto;
        padding: 40px;
        border: none;
        border-radius: 5px;
        background: linear-gradient(to right, teal, darkslategray);
        color: white;
    }

    #number {
        width: 100%;
        margin: 10px 0;
        border: none;
        border-radius: 5px;
        padding: 10px 0 10px 10px;
        outline: none;

    }
    .submitBtn {
        border:none;
        outline:none;
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: 600;
        cursor:pointer;
    }
    .center_content {
        text-align:center;
        background-color: teal;
        width: 400px;
        margin: 0 auto;
        padding:40px;
        color: #fff;
        font-size: 25px;
        border-radius: 5px;
    }
    </style>
</head>

<body>
    <section>
        <form action="" method="post" id="form_container">
            <div>
                <label for="number">Enter an Integer Number!</label> <br>
                <input type="text" name="number" id="number">
            </div>
            <input class="submitBtn" type="submit" value="Submit">
        </form>
    </section>


    <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];
        $fact = 1;

        if(!isset($number) || $number === '') {
            echo "<div class='center_content'><span> Number filed are required! </span></div>";
        }
        elseif(!is_numeric($number) || $number < 0) {
            echo "<div class='center_content'><span>Facrtorial are not defined negative or string numbers!</span></div>";
        }
        elseif($number === 0 || $number === 1){
            echo "<div class='center_content'><span>$number factorial is 1</span></div>";
        }
        else {
            for($i = 2; $i <= $number; $i++) {
                $fact *= $i;
            }
            echo "<div class='center_content'><span>$number Factorial is : $fact</span></div>";
        }
    }
    
    ?>
</body>

</html>