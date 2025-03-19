<?php

/* 
    A class is a blueprint or template for creating an objects. it defines properties and methods that the object create from the class will have.
*/

class Car
{
    public $name;
    public $brand;

    public function __construct($name, $brand)
    {
        $this->name = $name;
        $this->brand = $brand;
    }

    public function drive()
    {
        echo "this car owner name is" . ' ' . $this->name . ' ' . 'and this car brand is ' . $this->brand . '';
    }
}

/* 
    An object is a instance of a class . when a class is create it is empty property and method. object contain property and method define in the class.
*/

$myInfo = new Car('munna', 'bmw');
$myInfo->drive();

?>

<br>

<p>Polymorphism</p>

<?php

/* 
    A Ploymorphism is a concept of oop , where one function or  method can work with different types of data or objects.
*/

class Animal
{
    public function sound()
    {
        echo "some generic animal sound";
    }
}

class Dog extends Animal
{
    public function sound()
    {
        echo "Bark!";
    }
}

class Cat extends Animal
{
    public function sound()
    {
        echo "mewoooooo";
    }
}

$dog = new Dog(); // create and dog object 

$cat = new Cat(); // crate and cat object 

$dog->sound(); // output Bark

$cat->sound(); // output mewooooo;
?>

<br>

<p>Inheritance</p>

<?php
/* 
    A Inheritance in php is a contecpt of object oriented programing , where a class(child or subclass) can inherit properties or methods from another class (parent or superclass). This allow the child class reuse code form the parent class and extends or modify it functionlality.
*/

class Vehicle
{
    public $brand;
    public $color;

    public function __construct($brand, $color)
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    public function drive()
    {
        echo 'The ' . $this->color . ' ' . $this->brand . ' is driving' . ' ';
    }
}

class Car2 extends Vehicle
{
    public $door;

    public function __construct($brand, $color, $door)
    {
        parent::__construct($brand, $color);
        $this->door = $door;
    }

    public function openDoor()
    {
        echo ' and ' . $this->door . ' door is opening';
    }
}

$myCar = new Car2('Honda', 'REd', 4);
$myCar->drive();
$myCar->openDoor();
?>

<br>
<p>Abstarct</p>
<?php

/* 
    A Abstraction is a concept of oop , where hiding the complex implemations details and showing only the essential feature to the user. Abstraction can have abstract method. 

*/

abstract class Animal2
{
    abstract public function sound();

    public function eat()
    {
        echo ' This animal eats food';
    }
}

class Dog2 extends Animal2
{
    public function sound()
    {
        echo 'Barkkk!';
    }
}

$Mydog = new Dog2();
$Mydog->sound();
$Mydog->eat();
?>

<br>
<p>InterFace</p>
<?php
/* 
     A Interface also similer on abstract class , but it can only declare without impelmations.
*/

interface Animal3
{
    public function sound();
}

class Elephent implements Animal3
{
    public function sound()
    {
        echo "owwwwwwwwwwwwwwwwwwwwww!";
    }
}

class Lion implements Animal3
{
    public function sound()
    {
        echo "Rooooooooo arrr oarr !";
    }
}

$ele = new Elephent();
$lion = new Lion();

$ele->sound(); // output: owwwwwwwwwwwwwwwwwwww!
$lion->sound(); // output: Roooooooooooo arrr orr !
?>

<br>

<p>Encapsulation</p>

<?php
/* 
    A Encapsulation in php is a concept of oop , where restircting the object component and bundiling the data and method until a single unit.
*/

class Car3
{
    private $engine;

    public function startEnginee()
    {
        $this->engine = ' running';
        echo 'engine is start';
    }

    public function getEngineStatus()
    {
        return $this->engine;
    }
}

$myCar = new Car3();
$myCar->startEnginee();
echo $myCar->getEngineStatus();

?>

<br>

<p>Traits</p>


<?php
/* 
    A Traits in php is a mechanism for code reuse in single inheritance language like php. They allow you to share methods across the multiple class without nedding to use inheritance.
*/

trait Animal4
{
    public function sound()
    {
        echo "Animal4's sound is good <br>";
    }
}

trait Animal5
{
    public function sound()
    {
        echo "Animal5's sound is also good";
    }
}

class bothAnimal
{
    use Animal4, Animal5 {
        Animal4::sound insteadof Animal5;
        Animal5::sound as newSound;
    }
}
$obj = new bothAnimal();
$obj->sound();
$obj->newSound();
?>

<br>

<?php
/* Write a function to reverse a string without using strrev(). */

function reverseString($str)
{
    $reverStrings = '';

    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $reverStrings .= $str[$i];
    }

    return $reverStrings;
}

$orginalString = 'hello, world';
$reverStr = reverseString($orginalString);

echo "orginal string" . ' ' . $orginalString . '<br>';
echo "reverse string" . ' ' . $reverStr;
?>
<br>
<?php
/* How would you remove duplicate values from an array in PHP? */

function removeDuplicate($arr)
{
    return array_values(array_unique($arr));
}
$array = [1, 2, 2, 1, 3, 4, 5,];
print_r(removeDuplicate($array));
?>

<br>
<?php
/* Implement a function to check if a string is a palindrome */

function isPalindrome($str)
{
    return strtolower($str) === strtolower(strrev($str));
}

echo isPalindrome('munna') ? 'is Palindrom' : 'is not palindrome' . '<br>';
echo isPalindrome('racecar') ? 'is Palindrom' : 'is not palindrome';
?>

<br>

<?php
/* Write a PHP function to find the second largest number in an array. */

function secondLargest($arr)
{
    $second = array_unique($arr);
    rsort($second);
    return $second[1] ?? null;
}

$array = [1, 10, 21, 21, 36, 45, 6, 30];
echo secondLargest($array) . '<br>';
?>

<br>

<?php
/* find out the prime number */

function isPrime($num)
{
    if ($num <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
echo '5 ';
echo isPrime(5) ? ' is prime number' : 'is not prime number'
    ?>

<br>

<?php
/* How would you implement a recursive function to calculate the factorial of a number? */

function factorial($n)
{
    return ($n <= 1) ? 1 : $n * factorial($n - 1);
}
$factorialnum = 5;
echo factorial($factorialnum);
?>

<br>

<?php
/* Write a function to generate the Fibonacci series up to n terms. */

function fibonacci($n)
// {
//     $fib = [0, 1]; // initialization firt two terms

//     for ($i = 2; $i < $n; $i++) {
//         $fib[] = $fib[$i - 1] + $fib[$i - 2];
//     }
//     return $fib;
// }
// $fibonacciNum = 5;
// $fibSeries = fibonacci($fibonacciNum);
// // print_r(fibonacci($fibonacciNum));
// echo "Fibonacci series up to $fibonacciNum terms: " . implode(", ", $fibSeries);
{
    $a = 0;
    $b = 1;

    for ($i = 2; $i < $n; $i++) {
        $next = $a + $b; // Next Fibonacci number
        echo ", " . $next; // Print next term
        $a = $b; // Update a to the previous b
        $b = $next; // Update b to the current Fibonacci number
    }
}
$n = 10;
echo "Fibonacci series up to $n terms: ";
fibonacci($n);
?>