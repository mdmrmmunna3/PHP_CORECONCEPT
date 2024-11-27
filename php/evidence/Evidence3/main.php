<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>find student data </title>
    <style>
        #form_container{
        float: left;
        width: 30%;
        margin: 0 50px;
        padding: 40px;
        border: none;
        border-radius: 5px;
        background: linear-gradient(to right, teal, darkslategray);
        color: white;
        box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
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

    .table_container {
        width: 40%;
        margin: 100px 50px 0 50px;
        border-radius: 5px;
    }

    .table_container tr:nth-child(even){
        background-color: #a9dfbf;
    }

    .table_container tr:hover {
        background-color: deepskyblue;
        color: white;
        cursor: pointer;
    }

    .table_container th {
        padding-top: 12px;
        padding-bottom: 12px;
        background-color: #58d68d;
        color: white;
}
h3{
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 25px;
}
    </style>
</head>
<body>
<section>
    <form action="" method="post" id="form_container">
            <h3>Student Information Form!</h3>
            <div class="inputBox">
                <label for="stId">ID</label>
                <input type="text" name="stId" id="stId">
            </div>
            <div class="inputBox">
                <label for="stName">Name</label>
                <input type="text" name="stName" id="stName">
            </div>
            <div class="inputBox">
                <label for="stId">Batch</label>
                <input type="text" name="stBatch" id="stBatch">
            </div>

            <div class="btn">
                <input type="submit" value="Submit" name="submitBtn">
            </div>
        </form>
    </section>
</body>
</html>


<?php 
require_once ('student.php');

if(isset($_POST['submitBtn'])) {
    $stName = $_POST['stName'];
    $stId = $_POST['stId'];
    $stBatch = $_POST['stBatch'];

    $studentInfoObj = new Student($stName, $stId, $stBatch) ;
    $studentInfoObj->saveData();
}

Student::getSaveDataDisplay();

?>