<?php 
if(isset($_POST['submitBtn'])) {

   

    $fileName = $_FILES['fileUpload']['name'];
    // $fileType = $_FILES['fileUpload']['type'];
    $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $file_tmp_name = $_FILES['fileUpload']['tmp_name'];
    $file_size = $_FILES['fileUpload']['size'];
    $imgPath = "image/";
    $kb = $file_size/1024;

    // var_dump($fileName);
    // var_dump($fileType, $file_tmp_name, $file_size);

    if($kb > 100 || !in_array($fileType, ["jpg", "png", "jpeg", "gif"])) {
        if($kb > 100) {
            $msg1 = "file is too large. your file must be maximum 100kb";
        }
        if(!in_array($fileType, ["jpg", "png", "jpeg", "gif"])) {
            $msg2 = "<br> Sorry, only JPG, JPEG, PNG and GIF files are allowed.";
        }
    }
    
    
        
    else {
            if (move_uploaded_file($file_tmp_name, $imgPath.$fileName)) {
                echo "Successfully uploaded!";
            }
            else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File!</title>
    <style>
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
    </style>
</head>
<body>
    <?php 
    echo isset($msg1) ? $msg1 : '';
    echo "<br>";
    echo isset($msg2) ? $msg2 : '';
    ?>

    <section>
        <form action="" method="post" enctype="multipart/form-data" style="margin-top: 15px;">
            <div>
                <label for="fileUpload"></label>
                <input type="file" name="fileUpload" id="fileUpload">
            </div>
            <div class="btn">
                <input type="submit" value="Submit" name="submitBtn">
            </div>
        </form>
    </section>

    <section class="image-container">
        <?php
        $imgPath = "image/";
        $images = glob($imgPath."*.{jpg,png,jpeg,gif}", GLOB_BRACE);

        if(count($images) > 0) {
            foreach($images as $image) {
                echo '<img src="' . $image . '" alt="uploaded image">';
            }
        } else {
            echo "No images uploaded yet.";
        }
        ?>
    </section>
</body>
</html>
