<?php 

// create Fruits class 
class Fruits {
    // property
    public $name; // access name variable out of code using public property
    public $color;

    // init $name parameter from function 
    // set $name value in function using set_name method
    // $this are class pronoun 

    function set_name($name) {
        $this->name = $name;
    }
    function set_color($color) {
        $this->color = $color;
    }

    //get $name value in function using get_name method
    function get_name() {
        return $this->name;
    }
    function get_color() {
        return $this->color;
    }
}

// create object 
$apple = new Fruits();
$banana = new Fruits();

// call object's set_name method for set object's property values 
$apple->set_name("Apple, ");
$apple->set_color("Red");

$banana->set_name("Banana, ");
$banana->set_color("Yellow");

// call object's get_name method for get object's property values;
echo "Name: ";
echo $apple->get_name();
echo "Color: ";
echo $apple->get_color();
echo "<br>";

echo "Name: ";
echo $banana->get_name();
echo "Color: ";
echo $banana->get_color(); 
echo "<br>";

?>


<?php

class Info{
    public $age;

    function myAge ($age) {
       return $this->age = $age;
    }
}


$print = new Info();
// $print->age = 5;
echo $print->myAge(9);

// echo $print->age;
?>

<?php 
class Hello {
    public static $counter = 0;
   static function rafi($counter) {
        return $counter;
    }

    function ali ($counter) {
        return $counter;
    }
}

echo Hello::rafi(10) . "<br>"; //static with function
echo Hello::$counter. "<br>"; //static 

$munna = new Hello(); // dynamic
echo $munna->ali(15);
echo "<br>";

?>


<?php 
// class are blueprint who used to create an object 
class Intern { 
    public static $className = "PWAD";
    public static $teacher = "Farhana Mam";
    public $student ;

    function ourClass ($student) {
       return "Student Name: " . "". $this->student = $student;
    }
}
echo "Course Name: ";
echo Intern::$className; // direct call class // static class
echo "<br>";
echo "Teacher Name: ";
echo Intern::$teacher;
echo "<br>";

$myObject = new Intern(); // declare class in object // dynamic class

echo $myObject->ourClass("munna");
echo "<br>";
echo $myObject->ourClass("ismail");
echo "<br>";
echo $myObject->ourClass("rajib");
?>