<?php
if (isset($_POST['uploadBtn'])) {
    $filePath = $_FILES['fileUp'];
    var_dump($filePath);

    $fileName = $_FILES['fileUp']['name'];
    $file_tmp_name = $_FILES['fileUp']['tmp_name'];
    $fileName = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $fileSize = $_FILES['fileUp']['size'];
    $imgStorePath = 'image/';
    $kb = $file_size / 1024;

    if ($kb > 100 || !in_array($fileType, ['jpg', 'png', 'jpeg', 'gif'])) {
        if ($kb > 100) {
            $msg1 = "file is too large. your file must be maximum 100kb";
        }
        if (!in_array($fileType, ['jpg', 'png', 'jpeg', 'gif'])) {
            $msg2 = "<br> Sorry, only JPG, JPEG, PNG and GIF files are allowed.";
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
    // echo isset($msg1) ? $msg1 : '';
    // echo "<br>";
    // echo isset($msg2) ? $msg2 : '';
    ?>
</body>

</html>