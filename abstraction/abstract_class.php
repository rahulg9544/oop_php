<?php
// Abstract Class
abstract class Animal {
    protected $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    abstract public function makeSound();
}

// Concrete Class
class Dog extends Animal {
    public function makeSound() {
        return "Woof!";
    }
}

// Concrete Class
class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}

// Interface
interface Jumpable {
    public function jump();
}

// Concrete Class implementing Interface
class Kangaroo extends Animal implements Jumpable {
    public function makeSound() {
        return "Boing!";
    }
    
    public function jump() {
        return "Kangaroo is jumping!";
    }
}

// Usage
$dog = new Dog("Buddy");
echo $dog->makeSound(); // Output: Woof!

$cat = new Cat("Whiskers");
echo $cat->makeSound(); // Output: Meow!

$kangaroo = new Kangaroo("Joey");
echo $kangaroo->makeSound(); // Output: Boing!
echo $kangaroo->jump(); // Output: Kangaroo is jumping!

?>
