<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Largest Number of amoung three!</title>
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

    #num1,#num2,#num3 {
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
        <form action="" id="form_container" method="post">
            <div>
                <label for="num1">Enter first Number!</label> <br>
                <input type="text" name="num1" id="num1">
            </div>
            <div>
                <label for="num2">Eenter second Number!</label> <br>
                <input type="text" name="num2" id="num2">
            </div>
            <div>
                <label for="num3">Enter third Number!</label> <br>
                <input type="text" name="num3" id="num3">
            </div>
            <input class="submitBtn" type="submit" value="Submit">
        </form>
    </section>

    <?php
        if($_POST) {
            $firstNumber = $_POST['num1'];
            $secondNumber = $_POST['num2'];
            $thirdNumber = $_POST['num3'];

            // if(empty($firstNumber ) || empty($secondNumber) || empty($thirdNumber)) {
            //     echo "Input field are required!";
            // }

            if($firstNumber > $secondNumber && $firstNumber > $thirdNumber) {
                echo "<div class='center_content'><span>The largest number between $firstNumber, $secondNumber , $thirdNumber Number is : $firstNumber </span></div>";
            }
            if($secondNumber > $firstNumber && $secondNumber > $thirdNumber) {
                echo "<div class='center_content'><span>The largest number between $firstNumber, $secondNumber , $thirdNumber Number is : $secondNumber </span></div>";
            }
            else {
                echo "<div class='center_content'><span>The largest number between $firstNumber, $secondNumber , $thirdNumber Number is : $thirdNumber </span></div>";
            }
        }
    ?>
</body>
</html>