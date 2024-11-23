<?php
class StudentInformation {
    public $stId;
    public $stName;

    public static $file_path_name = "stData2.txt";
}

class InStudentInformation extends StudentInformation {
    public function __construct($id, $name){
        $this->stId = $id;
        $this->stName = $name;
    }

    public function breakLine() {
        return $this->stId . "," . $this->stName . PHP_EOL;
    }

    public function saveStInfo () {
        file_put_contents(self::$file_path_name, $this->breakLine(), FILE_APPEND);
    }

    public static function getStInfo() {
        $studentInfos = file(self::$file_path_name);
        echo"<div class='file_center'>";
        echo "<span class='left-content'><strong> ID </strong></span>";
        echo "<span><strong> Name </strong></span>";
        echo"</div><br>";
        // echo "<table> </table>";

        foreach($studentInfos as $studentInfo) {
            list($id, $name) = explode(",", trim($studentInfo));
            // echo "<div class='content-center'> $id | $name <br> </div>";
            echo"<table>
            <tr>
                <td>$id</td>
                <td class='name_value'>$name</td>
            </tr></table>
            ";
        }
    }
}

?>