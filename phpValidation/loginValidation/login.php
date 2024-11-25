<?php
    session_start();

    if(isset($_POST['submitBtn'])) {
        $userName = $_POST['name'];
        $userPass = $_POST['password'];


        if($userName === "munna" && $userPass === "123") {
            $_SESSION['myname'] = $userName;
            header("location:info.php");
        }
        else {
            // $msg = "username and password incorrect!";
            if($userName != 'munna') {
                $msg1 = "<div class='mssg'>User Name is incorrect!</div>";
            }
            if($userPass != '123') {
                $msg2 = "<div class='mssg'>User Password is incorrect!</div>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #form_container{
        /* float: left; */
        /* width: 30%;
        margin: 0 50px; */
        width: 400px;
        margin: 50px auto;
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
        border-radius: 5px;
    }

    .mssg {
        font-size: 22px;
        text-align: center;
        color: red;
        font-weight: 600;
    }

    .table_container {
        width: 40%;
        margin: 100px 50px 0 50px;
        border-radius: 5px;
    }

    .table_container tr:nth-child(even){
        /* background-color: #04AA6D; */
        background-color: #a9dfbf;
        /* background-color: darkcyan; */
    }

    .table_container tr:hover {
        /* background-color: #04AA6D; */
        background-color: deepskyblue;
    }

    .table_container th {
        padding-top: 12px;
        padding-bottom: 12px;
        /* background-color: #04AA6D; */
        /* background-color: deepskyblue; */
        background-color: #58d68d;
        color: white;
}
/* .table_container td {
    color:white;
} */
    </style>

</head>
<body>
     <section>

        <form action="" method="post" id="form_container">
            <div class="inputBox">
                <label for="name">UserName</label>
                <input type="text" name="name" id="stInamed">
            </div>
            <div class="inputBox">
                <label for="password">UserPassword</label>
                <input type="password" name="password" id="password">
            </div>
           

            <div class="btn">
                <input type="submit" value="Log In" name="submitBtn">
            </div>
        </form>

        <?php 
            echo isset($msg1) ? $msg1 : '';
            echo "<br>";
            echo isset($msg2) ? $msg2 : '';
        ?>
    </section>
</body>
</html>
