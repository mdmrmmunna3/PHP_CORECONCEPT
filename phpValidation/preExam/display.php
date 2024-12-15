<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display file</title>
</head>
<body>
    <div class="btn_logout">
        <a href="logout.php" class="logout" name="logout">Log Out</a>
    </div>

    <?php 
        $img_path = 'images/';

        $isimg_array = glob($img_path . "*.{png,jpg,jpeg,gif}", GLOB_BRACE);

        if(count($isimg_array) > 0) {
            foreach($isimg_array as $image) {
               
                echo '<img src = "'. $image . '" alt="uploaded img" style="width: 300px; height:300px; ">';
            }
        }
        else{
            echo "No Uploaded Image here!";
        }
    ?>
</body>
</html>