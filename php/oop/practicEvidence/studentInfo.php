<?php
// class StudentInfo {
//     private $stId;
//     private $stName;
//     private $stBatch;

//     private static $file_path_name = "stData.txt";

//     // Constructor to initialize student info
//     public function __construct($id, $name, $batch) {
//         $this->stId = $id;
//         $this->stName = $name;
//         $this->stBatch = $batch;
//     }

//     // Method to format student info into a line
//     private function breakLine() {
//         return $this->stId . "," . $this->stName . "," . $this->stBatch . PHP_EOL;
//     }

//     // Method to save student info to the file
//     public function saveInfo() {
//         file_put_contents(self::$file_path_name, $this->breakLine(), FILE_APPEND);
//     }

//     // Static method to retrieve and display all student info
//     public static function getStInfo() {
//         if (!file_exists(self::$file_path_name)) {
//             echo "No student data available.";
//             return;
//         }

//         // $stInfos = file(self::$file_path_name, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
//         $stInfos = file(self::$file_path_name);
        
//         echo "<div>";
//         echo "<span><strong>ID</strong></span> | ";
//         echo "<span><strong>Name</strong></span> | ";
//         echo "<span><strong>Batch</strong></span>";
//         echo "</div><br>";

//         foreach ($stInfos as $stInfo) {
//             list($id, $name, $batch) = explode(",", trim($stInfo));
//             echo "$id | $name | $batch <br>";
//         }
//     }
// }
?>
