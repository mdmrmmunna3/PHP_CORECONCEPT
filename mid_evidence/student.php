<?php 
class Student {
    public $stName;
    public $stId;
    public $stBatch;

    static $data_store_path = 'data.txt';
}

// inherit 

class StudentInfo extends Student {
    function __construct($name, $id, $batch) {
        $this->stName = $name;
        $this->stId = $id;
        $this->stBatch = $batch;
    }

    function combaindata() {
        return $this->stName . "," . $this->stId . "," . $this->stBatch . PHP_EOL;
    }

    // savestudent data 
    function saveData() {
        file_put_contents(self::$data_store_path, $this->combaindata(), FILE_APPEND);
    }

    // display student data 
    static function result () {
        $studentInfos = file(self::$data_store_path);

        echo "<table class='table_container' style='border: 2px solid blueviolet; border-collapse: collapse; width: %;'>
                <tr >
                    <th style='padding: 8px; text-align: center; border: 1px solid black;'>ID</th>
                    <th style='padding: 8px; text-align: center; border: 1px solid black;'>Name</th>
                    <th style='padding: 8px; text-align: center; border: 1px solid black;'>Batch</th>
                </tr>";
        foreach($studentInfos as $stuentInfo) {
            list($name, $id, $batch) = explode(",", trim($stuentInfo));
            echo "<tr >
                    <td style='padding: 8px; text-align: center; border: 1px solid black;'>$id</td>
                    <td style='padding: 8px; text-align: center; border: 1px solid black;'>$name</td>
                    <td style='padding: 8px; text-align: center; border: 1px solid black;'>$batch</td>
                </tr>";
        }
        echo "</table>";

    }
}

?>