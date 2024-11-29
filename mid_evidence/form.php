<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Info</title>
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

/* .content{
    width: 400px;
    text-align: center;
    font-size: 22px;
    font-weight: 600;
    background-color: teal;
    border: none;
    padding: 40px;
    border-radius: 5px;
    color: white;
    margin: 15px auto;
} */
    </style>
</head>
<body>
<section>
        <form action="" method="post" id="form_container">
            <h3>Student Info Form!</h3>
            <div class="inputBox">
                <label for="id">ID</label>
                <input type="text" name="id" id="id">
            </div>
            <div class="inputBox">
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="inputBox">
                <label for="batch">Batch</label>
                <input type="text" name="batch" id="batch">
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
    $stId = $_POST['id'];
    $stName = $_POST['name'];
    $stBatch = $_POST['batch'];

    $studentObj = new StudentInfo($stId, $stName, $stBatch);
    $studentObj->saveData();
 }

 StudentInfo::result();
 ?>