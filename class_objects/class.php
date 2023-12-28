<?php
// Define a class with a constructor
class Person {
  public $name;
  public $age;
  
  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }
}

// Create an object with arguments
$person = new Person("Yash Agarwal", 21);

// Access the properties of the object
echo $person->name; // Output: Yash Agarwal
echo $person->age; // Output:21

?>