<?php 
session_start();
if(isset($_POST['submitBtn'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $filepath = $_FILES['fileUp'];
    // var_dump($name, $email, $filepath);
    $fileName = $_FILES['fileUp']['name'];
    $fileSize = $_FILES['fileUp']['size'];
    $fileTmpName = $_FILES['fileUp']['tmp_name'];
    $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $kb = $fileSize / 1024;

    $imgStorePath = 'images/';

    if($name !== 'munna' || ($kb > 100 || !in_array($fileType, ['jpg', 'png', 'jpeg', 'gif']))) {

            if($kb > 100) {
                $msg1 = "<div>Your img must be maximum 100 kb</div>";
            }
            if(!in_array($fileType, ['jpg', 'png', 'jpeg', 'gif'])){
                $msg2 = "<div>Sorry! only jpg, png, jpeg, gif file are allowed!</div>";
            }
         
            if($name !== 'munna') {
                $msg = "<div>Your Name is incorrect!</div>";
            }
    }

    
    else {
            if(file_exists($imgStorePath . $fileName)) {
                    $msg3 = "<div>This file image already exit. change your image. </div>";
            }else {
                if(move_uploaded_file($fileTmpName, $imgStorePath . $fileName)) {
                        echo "Successfully Upload";
                        $_SESSION['validName'] = $name;
                        header("location:display.php"); 
                        exit();
                    }
                    else{
                        echo "Sorry, there was an error uploading your file.";
                    }
                }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
    <style>
        #form_container {
            width: 400px;
            margin: 0 auto;
            padding: 40px;
            border-radius: 5px;
            /* border: none; */
            box-shadow: rgba(0, 0, 0, 0.56) 0px 5px 15px;
        }

        .input_box {
            margin-bottom: 10px;
            width: 390px;
        }

        .input_box input {
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
        <?php 
        echo isset($msg) ? $msg : '';
        echo "<br>";
        echo isset($msg1) ? $msg1 : '';
        echo "<br>";
        echo isset($msg2) ? $msg2 : '';
        echo "<br>";
        echo isset($msg3) ? $msg3 : '';
        echo "<br>";
        ?>
        <form action="" method="post" enctype="multipart/form-data" id="form_container">
            <h4>Check Validtion Form!</h4>
            <div class="input_box">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="munna">
            </div>
            <div class="input_box">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="input_box">
                <label for="file">FileUpload</label>
                <input type="file" name="fileUp" id="fileUp">
            </div>
            <div class="btn">
                <input type="submit" value="Submit" name="submitBtn">
            </div>
        </form>
    </section>
</body>
</html>