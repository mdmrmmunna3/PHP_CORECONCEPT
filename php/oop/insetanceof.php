<?php

// Parent class
class Animal {
    public function makeSound() {
        echo "Some animal sound.";
    }
}

// Child class
class Dog extends Animal {
    public function bark() {
        echo "Woof Woof!";
    }
}

class Tiger {
    public function altraMakeSound() {
        echo "Some animal sound.";
    }
}


// একটি অবজেক্ট তৈরি করছি
$dog = new Dog();
$animal = new Animal();
$tiger = new Tiger();

// `instanceof` ব্যবহার করে চেক করছি
if ($tiger instanceof Dog) {
    echo "The object is an instance of Dog class.";
}
else{
    echo "The object is not an instance of Dog class.";
}

if ($tiger instanceof Animal) {
    echo "<br> The object is also an instance of Animal class.";
}
else {
    echo "<br> The object is also not an instance of Animal class.";
}

?>

<br>
<br>

 <!-- use trait operator  -->
<?php 

trait Subject1 {
    function firstMethod() {
        echo "Output will be first Method!";
        echo "<br>";
    }
}

// use another trait operator 
trait Subject2 {
    function secondMethod() {
        echo "Output will be show second Method!";
        echo "<br>";
    }
}


// can i use same method name ..what outpul will be show.. lets go ... solve any error or conflict . used insteadof and as oeprator.

trait Subject3 {
    function method() {
        echo "output will conflig! ";
        echo "<br>";
    }
}
trait Subject4 {
    function method() {
    echo "do you know!";
    }
}

 //show this output: when used same method Fatal error: Trait method subject4::method has not been applied as Mysubject::method, because of collision with subject3::method

//  insteadof দিয়ে বলে দেই কোন Trait-এর মেথড প্রাধান্য পাবে এবং as দিয়ে অন্য Trait-এর মেথডটিকে নতুন নামে অ্যাক্সেস করার সুযোগ রাখি।

class Mysubject {
    use Subject1, Subject2, Subject3, Subject4 {
        // handle conflig error 
        Subject3::method insteadOf Subject4;
        Subject4::method as newMethod;
    }
}

$creObje = new Mysubject();
$creObje->firstMethod();
$creObje->secondMethod();
$creObje->method();
$creObje->newMethod();

?>