<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Uploaded Images!</title>
    <style>
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
            background: linear-gradient(to left, red, crimson);
            border-radius: 5px;
            box-shadow: rgba(0, 0, 0, 0.56) 0px 10px 15px;
        }
    </style>
</head>
<body>
<div class="btn_logout">
        <a href="logout.php" class="logout" name="logout">Log Out</a>
    </div>

    <?php 
        $storeImgPath = 'images/';

        $imagesArray = glob($storeImgPath . "*.{jpg,png,jpeg,gif}", GLOB_BRACE );

        if(count($imagesArray) > 0) {
            foreach($imagesArray as $image) {
                echo '<img src="'. $image .'" alt="Uploaded Image" style="width: 300px; height:300px;" />';
            }
        }else{
            echo "No Uploaded Image here!";
        }
    ?>
</body>
</html>