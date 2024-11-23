<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Inforamtion Form</title>

    <style>
    #form_container{
        width: 500px;
        margin: 10px auto;
        padding: 40px;
        border: none;
        border-radius: 5px;
        background: linear-gradient(to right, teal, darkslategray);
        color: white;
    }
    .inputBox {
        margin-bottom: 10px;
    }
    .inputBox input{
        width: 100%;
        padding: 5px 0 5px 8px;
        border: none;
        outline: none;
    }
    .btn input {
        padding: 10px 20px;
        border: none;
        outline: none;
        border-radius: 5px;
    }

    .file_center {
        text-align: center;
    }
    .left-content {
        margin-right: 10%;
    }
    /* .content-center {
        text-align: center;
    } */

    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 200px;
    margin: 0 auto;
    }

    td{
        border: 1px solid #dddddd;
        /* text-align: left; */
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }

    .name_value {
        text-align: right;
    }
    </style>

</head>
<body>
    <section >
        <form action="" method="post" id="form_container">
            <div class="inputBox">
                <label for="stId">ID</label>
                <input type="text" name="stId" id="stId">
            </div>
            <div class="inputBox">
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