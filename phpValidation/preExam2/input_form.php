<?php
session_start();

$msg1 = $msg2 = $msg3 = $msg4 = $msg5 = $msg6 = "";
if (isset($_POST['insertFormBtn'])) {
    $inName = $_POST['name'];
    $inEmail = $_POST['email'];
    $inPassword = $_POST['pass'];

    $emailReg = '/^[a-zA-Z0-9._%+-]+@gmail\.com$/';
    $passReg = '/^(?=\S{1,8}$)(?=.*\W)/';

    $file_path = $_FILES['fileUp'];
    $file_name = $_FILES['fileUp']['name'];
    $file_size = $_FILES['fileUp']['size'];
    $file_tmp = $_FILES['fileUp']['tmp_name'];
    $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    $kb = $file_size / 1024;

    $img_path = 'images/';



    if ($inName !== 'munna' || $inEmail !== 'munna12@gmail.com' || $kb > 400 || !in_array($file_type, ['png', 'jpg', 'jpeg', 'gif']) || !preg_match($passReg, $inPassword)) {
        if ($inName !== 'munna') {
            $msg1 = "name is incorrect!";
        }
        if ($inEmail !== 'munna12@gmail.com') {
            $msg2 = "email is invalid or incorrect!";
        }
        if ($kb > 400) {
            $msg3 = "You uploaded file must be maximum 200 KB.";
        }
        if (!in_array($file_type, ['png', 'jpg', 'jpeg', 'gif'])) {
            $msg4 = "Uploaded file must be in png, jpg, jpeg, or gif format!";
        }
        if (!preg_match($passReg, $inPassword)) {
            $msg6 = "password must be 8 character or one spical character";
        }
    } else {
        if (file_exists($img_path . $file_name)) {
            $msg5 = "This image already exists. Please change the image!";
        } else {
            if (move_uploaded_file($file_tmp, $img_path . $file_name)) {
                $_SESSION['checkEmail'] = $inEmail;
                header('location:show_display.php');
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
    <title>insert </title>
</head>

<body>
    <section>
        <form action="" method="post" enctype="multipart/form-data" id="form_container">
            <div class="input_box">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="munna"
                    value="<?php echo isset($msg1) ? $msg1 : '' ?>">
                <?php if ($msg1) {
                    echo "<div class='error_msg'>$msg1</div>";
                } ?>
            </div>
            <div class="input_box">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="munna12@gmail.com"
                    value="<?php echo isset($msg2) ? $msg2 : '' ?>">
                <?php if ($msg2) {
                    echo "<div class='error_msg'>$msg2</div>";
                } ?>
            </div>
            <div class="input_box">
                <label for="pass">Password</label>
                <input type="text" name="pass" id="pass" placeholder="45786"
                    value="<?php echo isset($msg6) ? $msg6 : '' ?>">
                <?php if ($msg6) {
                    echo "<div class='error_msg'>$msg6</div>";
                } ?>
            </div>
            <div class="input_box">
                <label for="fileUp">File</label>
                <input type="file" name="fileUp" id="fileUp">
                <?php if ($msg3) {
                    echo "<div class='error_msg'>$msg3</div>";
                } ?>
                <?php if ($msg4) {
                    echo "<div class='error_msg'>$msg4</div>";
                } ?>
                <?php if ($msg5) {
                    echo "<div class='error_msg'>$msg5</div>";
                } ?>
            </div>
            <div class="btn">
                <button type="submit" name="insertFormBtn">Upload</button>
            </div>
        </form>
    </section>
</body>

</html>