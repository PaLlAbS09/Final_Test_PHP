<?php
class Animal {
    public function makeSound() {
        echo "Some generic animal sound";
    }
}

class Dog extends Animal {
   
    public function makeSound() {
        echo "Bark!";
    }
}

$dog = new Dog();
$dog->makeSound(); 
?>