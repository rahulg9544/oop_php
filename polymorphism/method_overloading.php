<?php
class Math {
    public function add($a, $b, $c = 0) {
        return $a + $b + $c;
    }
}

$math = new Math();
echo $math->add(2, 3);        // Output: 5
echo $math->add(2, 3, 4);     // Output: 9


?>
