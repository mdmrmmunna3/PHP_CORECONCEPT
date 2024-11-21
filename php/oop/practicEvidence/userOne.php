<?php 
namespace hello;
interface UserOne {
    function ali();
}

abstract class Munna implements UserOne {
    abstract function munna();
}

class Rajib extends Munna {
    function ali () {
        echo "my name is ali";
    }
    function munna () {
        echo "<br> my name is munna";
    }
}

?>