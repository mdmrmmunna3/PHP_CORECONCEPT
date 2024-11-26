<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>findout prime number!</title>
    <style>
        #form_container{
        /* float: left;
        width: 30%;
        margin: 0 50px; */
        width: 400px;
        margin: 10px auto;
        padding: 40px;
        border: none;
        border-radius: 5px;
        background: linear-gradient(to right, teal, darkslategray);
        color: white;
        box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
    }
    .inputBox {
        margin-bottom: 10px;
    }
    .inputBox input{
        width: 100%;
        padding: 5px 0 5px 8px;
        border: none;
        outline: none;
    }
    .btn input {
        padding: 10px 20px;
        border: none;
        outline: none;
        cursor: pointer;
        border-radius: 5px;
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
            <div class="inputBox">
                <label for="num1">Enter Integer Number!</label>
                <input type="text" name="num1" id="num1">
            </div>

            <div class="btn">
                <input type="submit" value="Submit">
            </div>
        </form>
    </section>


    <?php 
    if($_POST) {
        $inputNumber = $_POST['num1'];
        $fact = 1;


        
        if($inputNumber === 0 || $inputNumber === 1) {
            echo "<div class='center_content'>$inputNumber factorial is: 1</div>";
        }else {
            for($i = 2; $i <= $inputNumber; $i++) {
                $fact *= $i;
            }
            echo "<div class='center_content'>$inputNumber factorial is: $fact</div>";
        }
    }

    ?>

</body>
</html>