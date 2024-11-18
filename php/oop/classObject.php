<?php 

// create Fruits class 
class Fruits {
    // property
    public $name; // access name property out of code using public property
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

?>