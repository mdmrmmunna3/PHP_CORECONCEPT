<?php
if (isset($_POST['uploadBtn'])) {
    $filePath = $_FILES['fileUp'];
    // var_dump($filePath);

    $fileName = $_FILES['fileUp']['name'];
    $file_tmp_name = $_FILES['fileUp']['tmp_name'];
    $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $fileSize = $_FILES['fileUp']['size'];
    $imgStorePath = 'image/';
    $kb = $fileSize / 1024;

    if ($kb > 100 || !in_array($fileType, ['jpg', 'png', 'jpeg', 'gif'])) {
        if ($kb > 100) {

            $msg1 = "<div class='mssg'>file is too large. your file must be maximum 100kb</div>";
        }
        if (!in_array($fileType, ['jpg', 'png', 'jpeg', 'gif'])) {
            $msg2 = "<br> <div class='mssg'>Sorry, only JPG, JPEG, PNG and GIF files are allowed.</div>";
        }
    } else {
        if (file_exists($imgStorePath . $fileName)) {
            $msg3 = "<div class='mssg'>The image with this name already exists. Please change your file and try again.</div>";
        } else {
            if (move_uploaded_file($file_tmp_name, $imgStorePath . $fileName)) {
                echo "Successfully Updated!";
            } else {
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
    <title>File Uploaded Form</title>
    <style>
        /* #main {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 150px 0;
        } */
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
        .image-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .image-container img {
            width: 400px;
            /* height: auto; */
            border: 1px solid #ccc;
        }
        .btn_logout {
            position: fixed;
            right: 50px;
            top: 30px;
        }
        .btn_logout a {
            text-decoration: none;
            padding: 10px 20px;
            border: none;
            outline: none;
            font-weight: 600;
            font-size: 18px;
            cursor: pointer;
            color: white;
            background: linear-gradient(to left, red, orange);
            border-radius: 5px;
            box-shadow: rgba(0, 0, 0, 0.56) 0px 10px 15px;
        }
    </style>
</head>

<body>
    <div class="btn_logout">
        <a href="logout.php" class="logout" name="logout">Log Out</a>
    </div>
    <section id="main">
        <form action="" method="post" id="form_container" enctype="multipart/form-data">
            <h4>File Upload Form</h4>

            <div class="inputBox">
                <input type="file" name="fileUp" id="fileUp">
            </div>

            <div class="btn">
                <input type="submit" value="Upload" name="uploadBtn">
            </div>
        </form>
    </section>

    <?php
    echo isset($msg1) ? $msg1 : '';
    echo "<br>";
    echo isset($msg2) ? $msg2 : '';
    echo "<br>";
    echo isset($msg3) ? $msg3 : '';

    ?>
    <section class="image-container">
        <?php
        $imgStorePath = 'image/';

        $images = glob($imgStorePath . "*.{jpg,png,jpeg,gif}", GLOB_BRACE);

        if (count($images) > 0) {
            foreach ($images as $image) {
                echo '<img src="' . $image . '" alt="uploaded image">';
            }
        } else {
            echo "No images uploaded yet.";
        }


        ?>
    </section>
</body>

</html>