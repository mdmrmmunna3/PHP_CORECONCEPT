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
