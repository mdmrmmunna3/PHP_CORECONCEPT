 <!-- 
 TODO: PACTICE INTERFACE , ABSTRACTOR 
 -->

 <!-- use abstract clas and abstract method  -->
 <?php 
 abstract class MyClass {
    abstract function info();
    function display() {
        echo "display without abstract!";
    }
 }

 class CheckAbs extends MyClass {
    function info() {
        echo "this is abstract method! <br>";
    }
 }

 $obj = new CheckAbs();
 $obj->info();
 $obj->display();
 ?>

 <br>
 <br>


 <?php 
 
 interface InterfaceClass {
    function interface1();
    function display();

    // function show() {
    //     echo "Hello!";
    // } // you can't this formate method implemention in interface 
 }
 
 class interFaces implements InterfaceClass {
    function interface1() {
        echo "first implements method!";
    }
    function display() {
        echo "<br> second implements method!";
    }
 }

 $checked = new interFaces();
 $checked->interface1();
 $checked-> display();
 ?>