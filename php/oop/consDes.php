

<?php 

// class PrintHI {
//     public $name;
//     public $email;
//     function __construct($name, $email) {
//        echo $this->name = $name;
//        echo "<br>";
//        echo $this->email = $email;
//     }

//     function __destruct() {
//         echo "<br> My name is $this->name and my email is $this->email";
//     }

//     function displayInfo () {
//         echo "<br> Thank You so much $this->name";
//     }
// }

// $dekho = new PrintHI("Ali", "alibaba@.com");
// echo $dekho->displayInfo();
?>




<?php 

class PrintVai {
    public $name;
    public $email;

    function __construct($name, $email) {
       echo $this->name = $name;
       echo "<br>";
       echo $this->email = $email;
    }

    function __destruct() {
        echo "<br> My name is $this->name and my email is $this->email";
    }

    function displayInfo () {
        echo "<br> Thank You so much $this->name";
    }
}

class PrintChild extends PrintVai {
   public $phone;

    function __destruct(){
        echo "<br> Thank You so much $this->name good bye";
    }

    function __construct($name, $email, $phone){
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        echo "<br> My name is $this->name and my email is $this->email . my phone number $this->phone.  do you know this is a child contstuctor!";
    }

    function detailsInfo () {
        echo "<br> $this->name This is a child method. got it";
    }

}

// $dekho = new PrintHI("Ali", "alibaba@.com");
// echo $dekho->displayInfo();

$checkedOutput = new PrintChild("hazrat", "hazrat.com", "14785468");
echo $checkedOutput->detailsInfo();
?>