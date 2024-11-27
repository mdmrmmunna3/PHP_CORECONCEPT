<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>find prime number!</title>
    <style>
         #form_container{
        width: 400px;
        margin: 0 auto;
        /* float: left;
        width: 30%;
        margin: 0 50px; */
        padding: 40px;
        border: none;
        border-radius: 5px;
        background: linear-gradient(to top, teal, darkslategray);
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
        border-radius: 5px;
        cursor: pointer;
    }
    h3{
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 25px;
}
.content{
    width: 400px;
    text-align: center;
    font-size: 22px;
    font-weight: 600;
    background-color: teal;
    border: none;
    padding: 40px;
    border-radius: 5px;
    color: white;
    margin: 15px auto;
}
    </style>
</head>
<body>
<section>
        <form action="" method="post" id="form_container">
            <h3>Find Prime Number!</h3>
            <div class="inputBox">
                <label for="num1">Enter Integer Number!</label>
                <input type="text" name="num1" id="num1">
            </div>
            
            <div class="btn">
                <input type="submit" value="Submit">
            </div>
        </form>
    </section>
</body>
</html>


<?php 
if($_POST) {
    $num = $_POST['num1'];
    $count = 0;

    if($num <= 1) {
        return false;
    }
    else {
        for($i = 2; $i < $num; $i++) {
            if($num % $i === 0) {
                $count++;
                break;
            }
        }
    }

    if($count === 0) {
        echo "<div class='content'>
          $num is Prime Number.
        </div>";
    }
    else{
        echo "<div class='content'>
        $num is Not Prime Number.
      </div>";
    }
}
?>