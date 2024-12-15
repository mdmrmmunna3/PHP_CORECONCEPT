<?php 
    if(isset($_POST['subBtn'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        // var_dump($name, $email, $pass);
        $filePath = $_FILES['fileup'];
        // var_dump($filePath);

        $file_name = $_FILES['fileup']['name'];
        $file_size = $_FILES['fileup']['size'];
        $file_temp = $_FILES['fileup']['tmp_name'];
        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        $kb = $file_size / 1024;

        $img_path = 'images/';

        if($name !== 'munna' || $email !== 'munna@gmail.com' || $pass !== '78954' || $kb > 200 || !in_array($file_type, ['png','jpg','jpeg','gif'])) {
            if($name !== 'munna') {
                $error_msg = "<div>User Name Incorrect!</div>";
            }
            if($email !== 'munna@gmail.com') {
                $error_msg2 = "<div>User Email Invalid!</div>";
            }
            if($pass !== '78954') {
                $error_msg3 = "<div>User Password Incorrect.!</div>";
            }
            if($kb > 200) {
                $error_msg4 = "<div>you uploaded file must be maxmimum 200 kb.</div>";
            }
            if(!in_array($file_type, ['png','jpg','jpeg','gif'])) {
                $error_msg5 = "<div>uploaded file only png, jpg, jpeg, gif formate allowed!</div>";
            }
        }else{
            if(file_exists($img_path . $file_name)) {
                $error_msg6 = "<div>this img already exits . please change this images!;
        }</div>";
            }
            else{
                if(move_uploaded_file($file_temp, $img_path . $file_name)) {
                    $_SESSION['checkEmail'] = $email;
                
                }
                else{
                    echo "Sorry!. Your file not be uploaded yet!";
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
    <title>From validation with file uploade</title>
</head>
<body>
    <section>
    <!-- enctype="multipart/form-data -->
        <form action="" method="post" enctype="multipart/form-data">
            <div class="input_box">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="munna">
            </div>
            <div class="input_box">
                <label for="email">Name</label>
                <input type="email" name="email" id="email" placeholder="munna@gmail.com">
            </div>
            <div class="input_box">
                <label for="pass">Name</label>
                <input type="password" name="pass" id="pass" placeholder="78954">
            </div>
            <div class="input_box">
                <label for="fileup">FileUp</label>
                <input type="file" name="fileup" id="fileup" placeholder="78954">
            </div>
            <div class="btn">
                <input type="submit" value="Submit" name="subBtn">
            </div>
        </form>

        <?php 
        echo isset($error_msg) ? $error_msg : '';
        echo isset($error_msg2) ? $error_msg2 : '';
        echo isset($error_msg3) ? $error_msg3 : '';
        echo isset($error_msg4) ? $error_msg4 : '';
        echo isset($error_msg5) ? $error_msg5 : '';
        echo isset($error_msg6) ? $error_msg6 : '';
        ?>
    </section>
</body>
</html>

