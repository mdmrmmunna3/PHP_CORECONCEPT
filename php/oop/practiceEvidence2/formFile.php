<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Inforamtion Form</title>
</head>
<body>
    <section style="margin-bottom: 10px;">
        <form action="" method="post">
            <div>
                <label for="stId">ID</label>
                <input type="text" name="stId" id="stId">
            </div>
            <div>
                <label for="stName">Name</label>
                <input type="text" name="stName" id="stName">
            </div>

            <div class="btn">
                <input type="submit" value="Submit" name="submtBtn">
            </div>
        </form>
    </section>
</body>
</html>


<?php 
require_once("studentInfos.php");

if(isset($_POST["submtBtn"])) {
    $stId = $_POST['stId'];
    $stName = $_POST['stName'];


    $studentInfoObj = new InStudentInformation($stId, $stName);
    $studentInfoObj->saveStInfo();
    echo "FormSubmit Successfully!";

    header("Location:" . $_SERVER["PHP_SELF"]);
    exit;
}

InStudentInformation::getStInfo();
?>