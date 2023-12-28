<?php
class Person {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }
}

// Create a Person object
$person = new Person("John Doe", 25);

// Access and display the name and age
echo "Name: " . $person->getName() . "\n";
echo "Age: " . $person->getAge() . "\n";

// Update the name and age using the setter methods
$person->setName("Jane Smith");
$person->setAge(30);

// Display the updated name and age
echo "Updated Name: " . $person->getName() . "\n";
echo "Updated Age: " . $person->getAge() . "\n";
?>