<?php 

class Students {
    public $name;
    public $id;

    static $store_file_path = 'data.txt';
}

// inherit 
class Student extends Students {
    function __construct($name, $id, $batch){
        $this->stName = $name;
        $this->stId = $id;
        $this->stBatch = $batch;
    }

    function loadData () {
        return $this->stName . "," . $this->stId . "," . $this->stBatch . PHP_EOL;
    }

    function saveData () {
        file_put_contents(self::$store_file_path, $this->loadData(), FILE_APPEND);
    }

   static function getSaveDataDisplay() {
        $studentInfos = file(self::$store_file_path);

        echo "<table class='table_container' style='border: 2px solid blueviolet; border-collapse: collapse; width: %;'>
                <tr >
                    <th style='padding: 8px; text-align: center; border: 1px solid black;'>ID</th>
                    <th style='padding: 8px; text-align: center; border: 1px solid black;'>Name</th>
                    <th style='padding: 8px; text-align: center; border: 1px solid black;'>Batch</th>
                </tr>";

        foreach($studentInfos as $studentInfo) {
            list($name, $id, $batch) = explode("," , trim($studentInfo));
            echo "
            <tr >
                    <td style='padding: 8px; text-align: center; border: 1px solid black;'>$name</td>
                    <td style='padding: 8px; text-align: center; border: 1px solid black;'>$id</td>
                    <td style='padding: 8px; text-align: center; border: 1px solid black;'>$batch</td>
            </tr>
            ";
        }
        echo "</table>";
    }
}

?>