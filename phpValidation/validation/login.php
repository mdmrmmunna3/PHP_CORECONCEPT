<?php
session_start();
if (isset($_POST['submitBtn'])) {
    $userName = $_POST['userName'];
    $userPass = $_POST['userPass'];

    // echo $userName, $userPass;
    if ($userName === "Munna" && $userPass === "4568") {
        $_SESSION['myName'] = $userName;
        header("location:fileUpload.php");
    } else {
        if ($userName !== "Munna") {
            $msg1 = "<div class='mssg'>User Name is incorrect!</div>";
        }
        if ($userPass !== "4568") {
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
    <title>Login Form!</title>
    <style>
        #form_container {
            width: 400px;
            margin: 0 auto;
            padding: 40px;
            border-radius: 5px;
            /* border: none; */
            box-shadow: rgba(0, 0, 0, 0.56) 0px 5px 15px;
        }

        .inputBox {
            margin-bottom: 10px;
            width: 390px;
        }

        .inputBox input {
            width: 100%;
            padding: 5px 0 5px 8px;
            border: 2px solid green;
            border-radius: 5px;
        }

        .inputBox label {
            font-size: 18px;
        }

        h4 {
            font-size: 22px;
            text-align: center;
            margin: 0 0 10px 0;
            text-transform: uppercase;
        }

        .btn input {
            width: 100%;
            border-radius: 5px;
            border: none;
            outline: none;
            padding: 10px 0;
            background-color: green;
            color: white;
            cursor: pointer;
        }

        .mssg {
            text-align: center;
            margin-top: 10px;
            color: red;
            font-weight: 600;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <section>
        <form action="" method="post" id="form_container">
            <h4>Log In Form</h4>
            <div class="inputBox">
                <label for="userName">User Name</label>
                <input type="text" name='userName' id='userName' placeholder="Munna">
            </div>
            <div class="inputBox">
                <label for="userPass">User Pass</label>
                <input type="text" name='userPass' id='userPass' placeholder="4568">
            </div>

            <div class="btn">
                <input type="submit" value="Submit" name="submitBtn">
            </div>
        </form>
    </section>

    <?php
    echo isset($msg1) ? $msg1 : '';
    echo "<br>";
    echo isset($msg2) ? $msg2 : '';
    ?>
</body>

</html>