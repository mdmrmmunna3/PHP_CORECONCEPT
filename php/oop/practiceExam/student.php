<?php 
class Students {
    public $stId;
    public $stName;
    public $stBatch;
}

class Student extends Students {

   static $file_path_name = "data.txt";

    function __construct($id, $name, $batch) {
        $this->stId = $id;
        $this->stName = $name;
        $this->stBatch = $batch;
    }
    function passValue () {
        return $this->stId . "," . $this->stName . "," . $this->stBatch . PHP_EOL;
    }

    function saveInfo() {
        file_put_contents(self::$file_path_name, $this->passValue(), FILE_APPEND);
    }

    static function getSaveInfo() {
        // Assuming file() loads each line of data into $studentInfos
        $studentInfos = file(self::$file_path_name);
    
        // Start the HTML table
        echo "<table class='table_container' style='border: 2px solid blueviolet; border-collapse: collapse; width: %;'>
                <tr >
                    <th style='padding: 8px; text-align: center; border: 1px solid black;'>ID</th>
                    <th style='padding: 8px; text-align: center; border: 1px solid black;'>Name</th>
                    <th style='padding: 8px; text-align: center; border: 1px solid black;'>Batch</th>
                </tr>";
    
        // Loop through each student's information
        foreach ($studentInfos as $studentInfo) {
            // Assuming each line is in "id,name,batch" format
            list($id, $name, $batch) = explode(",", trim($studentInfo));
    
            // Create a row for each student
            echo "
            <tr >
                    <td style='padding: 8px; text-align: center; border: 1px solid black;'>$id</td>
                    <td style='padding: 8px; text-align: center; border: 1px solid black;'>$name</td>
                    <td style='padding: 8px; text-align: center; border: 1px solid black;'>$batch</td>
            </tr>
            ";
            
        }
    
        // End the table
        echo "</table>";
    }
    
}
?>
