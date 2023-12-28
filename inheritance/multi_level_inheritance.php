<?php
class Animal {
   public function sound() {
      echo "The animal makes a sound.";
   }
}

class Mammal extends Animal {
   // Additional class definition for Mammal
}

class Dog extends Mammal {
   // Additional class definition for Dog
}

?>