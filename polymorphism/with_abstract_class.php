<?php
abstract class Vehicle {
    abstract public function start();
    abstract public function stop();
}

class Car extends Vehicle {
    public function start() {
        echo "Car started.\n";
    }

    public function stop() {
        echo "Car stopped.\n";
    }
}

class Bike extends Vehicle {
    public function start() {
        echo "Bike started.\n";
    }

    public function stop() {
        echo "Bike stopped.\n";
    }
}

$car = new Car();
$car->start();    // Output: Car started.
$car->stop();     // Output: Car stopped.

$bike = new Bike();
$bike->start();   // Output: Bike started.
$bike->stop();    // Output: Bike stopped.

?>
