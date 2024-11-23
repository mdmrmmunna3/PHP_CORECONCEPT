
<!-- private  -->
<?php 

class AccessModifier {
    private $name = "Munna" ;

    private function privetMehtod () {
        echo "Hello " . $this->name;
    }

    function showMethod() {
        $this->privetMehtod(); // Private method can be accessed within the same class

        // echo $this->name;
    }
}

$checkObj = new AccessModifier();
// $checkObj->$name; // warning  
// $checkObj->privetMehtod(); // error
$checkObj->showMethod();
?>

<!-- protected   -->

<?php 

class AccessModifier2 {
    protected $name = "Ali";
    protected function protectedMethod() {
        echo "<br> Hello ". $this->name;
    }
}

// another class 
class ChildAccessModifier2 extends AccessModifier2 {
    function display() {
        $this->protectedMethod();  // Calling protected method in subclass
        // echo $this->name;
    }
}

$checkObj = new ChildAccessModifier2();
$checkObj->display();
?>

<!-- public  -->

<?php 

class AccessModifier3 {
    public $name = "Ismail";


    function showDisplay() {
        echo "<br> Hello ". $this->name;
    }
}

$checkObj = new AccessModifier3();

$checkObj->name;
$checkObj->showDisplay();

?>