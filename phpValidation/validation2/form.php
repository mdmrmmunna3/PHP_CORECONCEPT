<?php 
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

    if($name === 'munna') {
        $_SESSION['validName'] = $name;
        header("location:display.php");
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
</head>
<body>
    <section>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="input_box">
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
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