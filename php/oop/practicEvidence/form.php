<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student inforamtion </title>
   
</head>
<body>
    <section style="margin-bottom: 10px">
        <form action="" method="post" >
           <div>
            <span>ID</span>
            <input type="text" name="stId" id="stId">
           </div>

           <div>
            <span>Name</span>
            <input type="text" name="stName" id="stName">
           </div>

           <div>
            <span>Batch</span>
            <input type="radio" name="stBatch" id="pwad" Value="pwad">
            <label for="pwad">PWAD</label>

            <input type="radio" name="stBatch" id="wadp" Value="wadp">
            <label for="wadp">WADP</label>
           </div>

        <input type="submit" value="Submit" name="submitBtn">

        </form>
    </section>
</body>
</html>


<?php 
// require_once("studentInfo.php");

// if(isset($_POST["submitBtn"])) {
//     $id = $_POST['stId'];
//     $name = $_POST['stName'];
//     $batch = $_POST['stBatch'];

//     $student = new StudentInfo($id, $name, $batch);
//     $student->saveInfo();
//     echo "SuccessFully Submit";

//      // Prevent form resubmission
//      header("Location: " . $_SERVER['PHP_SELF']);
//      exit;

//      // Clear POST data useing unset
//     // unset($_POST);
// }

// StudentInfo::getStInfo();

?>

<?php 
require_once ("studentInfo.php");

if(isset($_POST["submitBtn"])) {
    $id = $_POST["stId"];
    $name = $_POST["stName"];
    $batch = $_POST["stBatch"];

    $studentInfoObj = new StudentInfo($id, $name, $batch);
    $studentInfoObj->saveStInfo();
    echo "SuccessFully Submit";

    header("Location:" . $_SERVER['PHP_SELF']);
    exit; 
}

StudentInfo::getStInfo();

?>