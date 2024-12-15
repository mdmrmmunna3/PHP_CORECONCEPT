<?php 
    // Initialize error messages as empty strings
    $error_msg = $error_msg2 = $error_msg3 = $error_msg4 = $error_msg5 = $error_msg6 = "";

    if(isset($_POST['subBtn'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $filePath = $_FILES['fileup'];

        $file_name = $_FILES['fileup']['name'];
        $file_size = $_FILES['fileup']['size'];
        $file_temp = $_FILES['fileup']['tmp_name'];
        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        $kb = $file_size / 1024;

        $img_path = 'images/';

        // Validation checks
        if($name !== 'munna' || $email !== 'munna@gmail.com' || $pass !== '78954' || $kb > 200 || !in_array($file_type, ['png','jpg','jpeg','gif'])) {
            if($name !== 'munna') {
                $error_msg = "User Name Incorrect!";
            }
            if($email !== 'munna@gmail.com') {
                $error_msg2 = "User Email Invalid!";
            }
            if($pass !== '78954') {
                $error_msg3 = "User Password Incorrect!";
            }
            if($kb > 200) {
                $error_msg4 = "You uploaded file must be maximum 200 KB.";
            }
            if(!in_array($file_type, ['png','jpg','jpeg','gif'])) {
                $error_msg5 = "Uploaded file must be in png, jpg, jpeg, or gif format!";
            }
        } else {
            // Check if file already exists
            if(file_exists($img_path . $file_name)) {
                $error_msg6 = "This image already exists. Please change the image!";
            }
            else {
                // Move uploaded file
                if(move_uploaded_file($file_temp, $img_path . $file_name)) {
                    $_SESSION['checkEmail'] = $email;
                    header("location:display.php");
                    exit();
                } else {
                    echo "Sorry! Your file was not uploaded.";
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
    <title>Form Validation with File Upload</title>
    <style>
        #form_container {
            width: 400px;
            margin: 0 auto;
            padding: 40px;
            border-radius: 5px;
            box-shadow: rgba(0, 0, 0, 0.56) 0px 5px 15px;
        }

        .input_box {
            margin-bottom: 10px;
            width: 390px;
        }

        .input_box input {
            width: 100%;
            padding: 5px 0 5px 8px;
            border: 2px solid grey;
            border-radius: 5px;
        }

        .input_box label {
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

        .error_msg {
            color: red;
            font-weight: bold;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <section>
        <form action="" method="post" enctype="multipart/form-data" id="form_container">
            <div class="input_box">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="munna" value="<?php echo isset($name) ? $name : ''; ?>">
                <?php if($error_msg) { echo "<div class='error_msg'>$error_msg</div>"; } ?>
            </div>
            <div class="input_box">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="munna@gmail.com" value="<?php echo isset($email) ? $email : ''; ?>">
                <?php if($error_msg2) { echo "<div class='error_msg'>$error_msg2</div>"; } ?>
            </div>
            <div class="input_box">
                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass" placeholder="78954" value="<?php echo isset($pass) ? $pass : ''; ?>">
                <?php if($error_msg3) { echo "<div class='error_msg'>$error_msg3</div>"; } ?>
            </div>
            <div class="input_box">
                <label for="fileup">File Upload</label>
                <input type="file" name="fileup" id="fileup">
                <?php if($error_msg4) { echo "<div class='error_msg'>$error_msg4</div>"; } ?>
                <?php if($error_msg5) { echo "<div class='error_msg'>$error_msg5</div>"; } ?>
                <?php if($error_msg6) { echo "<div class='error_msg'>$error_msg6</div>"; } ?>
            </div>
            <div class="btn">
                <input type="submit" value="Submit" name="subBtn">
            </div>
        </form>
    </section>
</body>
</html>
